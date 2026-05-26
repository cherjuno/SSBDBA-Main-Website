@extends('admin.layouts.app')

@section('page-title', 'Articles')
@section('page-subtitle', 'Search, paginate, edit, and delete articles')

@section('content')
<div class="space-y-6">
    @if (session('status'))
        <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-700">{{ session('status') }}</div>
    @endif

    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
        <form method="GET" class="flex gap-3">
            <input type="text" name="search" value="{{ $search }}" placeholder="Search article..." class="w-full lg:w-96 rounded-xl border-slate-300 focus:border-blue-600 focus:ring-blue-600">
            <button class="rounded-xl bg-slate-950 px-5 py-3 text-white font-semibold">Search</button>
        </form>

        <a href="{{ route('admin.articles.create') }}" class="rounded-xl bg-blue-600 px-5 py-3 text-white font-semibold text-center">Create Article</a>
    </div>

    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200">
                <thead class="bg-slate-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-[0.2em] text-slate-500">Title</th>
                        <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-[0.2em] text-slate-500">Category</th>
                        <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-[0.2em] text-slate-500">Views</th>
                        <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-[0.2em] text-slate-500">Status</th>
                        <th class="px-6 py-4 text-right text-xs font-bold uppercase tracking-[0.2em] text-slate-500">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200">
                    @forelse ($articles as $article)
                        <tr>
                            <td class="px-6 py-4 font-semibold text-slate-900">{{ $article->title }}</td>
                            <td class="px-6 py-4 text-slate-600">{{ $article->category }}</td>
                            <td class="px-6 py-4 text-slate-600">{{ $article->views_count }}</td>
                            <td class="px-6 py-4">
                                <span class="rounded-full px-3 py-1 text-xs font-bold {{ $article->is_published ? 'bg-emerald-50 text-emerald-700' : 'bg-slate-100 text-slate-600' }}">{{ $article->is_published ? 'Published' : 'Draft' }}</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="inline-flex gap-2">
                                    <a href="{{ route('admin.articles.edit', $article) }}" class="rounded-lg bg-blue-50 px-3 py-2 text-sm font-semibold text-blue-700">Edit</a>
                                    <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" onsubmit="return confirm('Delete this article?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="rounded-lg bg-red-50 px-3 py-2 text-sm font-semibold text-red-700">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-10 text-center text-slate-500">No articles found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{ $articles->links() }}
</div>
@endsection