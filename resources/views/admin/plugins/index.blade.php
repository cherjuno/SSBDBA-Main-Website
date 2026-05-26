@extends('admin.layouts.app')

@section('page-title', 'Plugins')
@section('page-subtitle', 'Upload, enable, and disable plugins')

@section('content')
<div class="space-y-6">
    @if (session('status'))
        <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-700">{{ session('status') }}</div>
    @endif

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
        <div class="xl:col-span-2 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <div class="border-b border-slate-200 px-6 py-4 bg-slate-50 flex items-center justify-between">
                <h3 class="text-lg font-bold text-slate-900">Installed Plugins</h3>
                <form method="GET" class="flex gap-3">
                    <input type="text" name="search" value="{{ $search }}" placeholder="Search plugin..." class="rounded-xl border-slate-300 focus:border-blue-600 focus:ring-blue-600">
                    <button class="rounded-xl bg-slate-950 px-4 py-2 text-white font-semibold">Search</button>
                </form>
            </div>

            <div class="divide-y divide-slate-200">
                @forelse ($plugins as $plugin)
                    <div class="px-6 py-5 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                        <div>
                            <h4 class="text-lg font-bold text-slate-900">{{ $plugin->name }}</h4>
                            <p class="text-sm text-slate-500 mt-1">{{ $plugin->description ?? 'No description' }}</p>
                            <p class="text-sm text-slate-500 mt-1">Version: {{ $plugin->version ?? '-' }}</p>
                        </div>

                        <div class="flex items-center gap-3">
                            <form action="{{ route('admin.plugins.toggle', $plugin) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="inline-flex items-center rounded-full px-4 py-2 text-sm font-semibold {{ $plugin->is_enabled ? 'bg-emerald-50 text-emerald-700' : 'bg-slate-100 text-slate-600' }}">
                                    {{ $plugin->is_enabled ? 'Enabled' : 'Disabled' }}
                                </button>
                            </form>
                            <a href="{{ asset('storage/' . $plugin->file_path) }}" class="rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700" target="_blank">Download</a>
                        </div>
                    </div>
                @empty
                    <div class="px-6 py-10 text-center text-slate-500">No plugins found.</div>
                @endforelse
            </div>
        </div>

        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm h-fit">
            <h3 class="text-lg font-bold text-slate-900 mb-4">Upload Plugin</h3>
            <form action="{{ route('admin.plugins.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Name</label>
                    <input name="name" class="w-full rounded-xl border-slate-300 focus:border-blue-600 focus:ring-blue-600" placeholder="Plugin name">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Version</label>
                    <input name="version" class="w-full rounded-xl border-slate-300 focus:border-blue-600 focus:ring-blue-600" placeholder="1.0.0">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Description</label>
                    <textarea name="description" rows="4" class="w-full rounded-xl border-slate-300 focus:border-blue-600 focus:ring-blue-600"></textarea>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Plugin file (.zip)</label>
                    <input type="file" name="plugin_file" accept=".zip" class="w-full rounded-xl border-slate-300 focus:border-blue-600 focus:ring-blue-600">
                </div>
                <button class="w-full rounded-xl bg-slate-950 px-5 py-3 font-semibold text-white">Upload Plugin</button>
            </form>
            <p class="mt-4 text-xs text-slate-500">Folder upload dapat diubah nanti menjadi unzip flow server-side. Untuk browser, ZIP adalah opsi paling aman.</p>
        </div>
    </div>

    {{ $plugins->links() }}
</div>
@endsection