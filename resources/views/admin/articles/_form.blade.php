@csrf

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="lg:col-span-2 space-y-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm space-y-5">
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2" for="title">Judul</label>
                <input id="title" name="title" value="{{ old('title', $article->title) }}" class="w-full rounded-xl border-slate-300 focus:border-blue-600 focus:ring-blue-600">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2" for="category">Kategori</label>
                    <input id="category" name="category" value="{{ old('category', $article->category) }}" class="w-full rounded-xl border-slate-300 focus:border-blue-600 focus:ring-blue-600">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2" for="published_at">Publish At</label>
                    <input id="published_at" name="published_at" type="datetime-local" value="{{ old('published_at', optional($article->published_at)->format('Y-m-d\TH:i')) }}" class="w-full rounded-xl border-slate-300 focus:border-blue-600 focus:ring-blue-600">
                </div>
            </div>
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2" for="excerpt">Excerpt</label>
                <textarea id="excerpt" name="excerpt" rows="3" class="w-full rounded-xl border-slate-300 focus:border-blue-600 focus:ring-blue-600">{{ old('excerpt', $article->excerpt) }}</textarea>
            </div>
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2" for="content">Konten</label>
                <textarea id="content" name="content" rows="14" class="w-full rounded-xl border-slate-300 focus:border-blue-600 focus:ring-blue-600" placeholder="Gunakan rich text editor di sini bila nanti dipasang">{{ old('content', $article->content) }}</textarea>
                <p class="mt-2 text-sm text-slate-500">Contoh upload gambar di dalam teks: gunakan endpoint <span class="font-semibold">POST /admin/articles/upload-image</span>.</p>
            </div>
        </div>
    </div>

    <div class="space-y-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm space-y-5">
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2" for="thumbnail">Thumbnail Utama</label>
                <input id="thumbnail" name="thumbnail" type="file" accept="image/*" class="w-full rounded-xl border-slate-300 focus:border-blue-600 focus:ring-blue-600">
            </div>
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2" for="editor_image">Upload Gambar ke Editor</label>
                <input id="editor_image" name="editor_image" type="file" accept="image/*" class="w-full rounded-xl border-slate-300 focus:border-blue-600 focus:ring-blue-600">
                <p class="mt-2 text-sm text-slate-500">File ini dipakai sebagai contoh upload image storage/public.</p>
            </div>
            <div class="flex items-center justify-between rounded-xl bg-slate-50 px-4 py-3">
                <span class="text-sm font-semibold text-slate-700">Published</span>
                <input type="checkbox" name="is_published" value="1" {{ old('is_published', $article->is_published) ? 'checked' : '' }} class="h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-blue-600">
            </div>
        </div>

        <div class="rounded-2xl border border-blue-100 bg-blue-50 p-6">
            <h3 class="font-bold text-blue-900 mb-3">Catatan</h3>
            <p class="text-sm text-blue-800">File ini sengaja dibuat sederhana agar mudah diganti nanti dengan editor WYSIWYG seperti CKEditor atau TinyMCE.</p>
        </div>

        <div class="flex gap-3">
            <button class="flex-1 rounded-xl bg-slate-950 px-5 py-3 text-white font-semibold">Save</button>
            <a href="{{ route('admin.articles.index') }}" class="flex-1 rounded-xl border border-slate-300 bg-white px-5 py-3 text-center font-semibold text-slate-700">Cancel</a>
        </div>
    </div>
</div>