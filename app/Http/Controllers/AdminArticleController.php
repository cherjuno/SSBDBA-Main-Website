<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminArticleController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->string('search')->trim()->toString();
        $query = Article::query()->latest();

        if ($search !== '') {
            $query->where(function ($builder) use ($search) {
                $builder->where('title', 'like', "%{$search}%")
                    ->orWhere('category', 'like', "%{$search}%");
            });
        }

        return view('admin.articles.index', [
            'articles' => $query->paginate(10)->withQueryString(),
            'search' => $search,
        ]);
    }

    public function create()
    {
        return view('admin.articles.create', ['article' => new Article()]);
    }

    public function store(Request $request)
    {
        $data = $this->validateArticle($request);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail_path'] = $request->file('thumbnail')->store('articles/thumbnails', 'public');
        }

        $data['slug'] = Str::slug($data['title']) . '-' . Str::lower(Str::random(6));
        $data['views_count'] = 0;
        $data['published_at'] = $data['published_at'] ?? now();
        $data['is_published'] = $request->boolean('is_published');
        $data['user_id'] = $request->user()?->id;

        Article::create($data);

        return redirect()->route('admin.articles.index')->with('status', 'Artikel berhasil dibuat.');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $data = $this->validateArticle($request, $article->id);

        if ($request->hasFile('thumbnail')) {
            if ($article->thumbnail_path) {
                Storage::disk('public')->delete($article->thumbnail_path);
            }

            $data['thumbnail_path'] = $request->file('thumbnail')->store('articles/thumbnails', 'public');
        }

        $data['is_published'] = $request->boolean('is_published');

        $article->update($data);

        return redirect()->route('admin.articles.index')->with('status', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Article $article)
    {
        if ($article->thumbnail_path) {
            Storage::disk('public')->delete($article->thumbnail_path);
        }

        $article->delete();

        return back()->with('status', 'Artikel berhasil dihapus.');
    }

    public function uploadImage(Request $request)
    {
        $validated = $request->validate([
            'image' => ['required', 'image', 'max:5120'],
        ]);

        $path = $validated['image']->store('articles/editor-images', 'public');

        return response()->json([
            'url' => Storage::disk('public')->url($path),
            'path' => $path,
        ]);
    }

    private function validateArticle(Request $request, ?int $ignoreId = null): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:100'],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'content' => ['required', 'string'],
            'published_at' => ['nullable', 'date'],
            'is_published' => ['nullable', 'boolean'],
            'thumbnail' => ['nullable', 'image', 'max:5120'],
        ]);
    }
}