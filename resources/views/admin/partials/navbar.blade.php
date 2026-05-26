<header class="sticky top-0 z-30 border-b border-slate-200 bg-white/90 backdrop-blur">
    <div class="flex items-center justify-between gap-4 px-4 sm:px-6 lg:px-8 py-4">
        <div>
            <h2 class="text-lg font-bold text-slate-900">@yield('page-title', 'Dashboard')</h2>
            <p class="text-sm text-slate-500">@yield('page-subtitle', 'Manage the website content from one place')</p>
        </div>

        <div class="flex items-center gap-3">
            <a href="{{ route('admin.articles.create') }}" class="hidden sm:inline-flex rounded-xl bg-slate-950 px-4 py-2 text-white text-sm font-semibold">New Article</a>
            <div class="h-10 w-10 rounded-full bg-slate-900 text-white flex items-center justify-center font-bold">
                {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
            </div>
        </div>
    </div>
</header>