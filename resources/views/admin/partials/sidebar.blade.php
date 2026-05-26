<aside class="hidden lg:flex w-72 flex-col bg-slate-950 text-white px-6 py-8 sticky top-0 h-screen">
    <div class="mb-10">
        <p class="text-xs uppercase tracking-[0.3em] text-sky-300 mb-3">Admin</p>
        <h1 class="text-2xl font-bold leading-tight">SSBDA CMS</h1>
        <p class="text-sm text-slate-400 mt-2">Dashboard, artikel, dan plugin</p>
    </div>

    <nav class="space-y-2 text-sm flex-1">
        <a href="{{ route('admin.dashboard') }}" class="block rounded-xl px-4 py-3 {{ request()->routeIs('admin.dashboard') ? 'bg-white/10 text-white' : 'text-slate-300 hover:bg-white/10' }} transition">Overview</a>
        <a href="{{ route('admin.articles.index') }}" class="block rounded-xl px-4 py-3 {{ request()->routeIs('admin.articles.*') ? 'bg-white/10 text-white' : 'text-slate-300 hover:bg-white/10' }} transition">Articles</a>
        <a href="{{ route('admin.plugins.index') }}" class="block rounded-xl px-4 py-3 {{ request()->routeIs('admin.plugins.*') ? 'bg-white/10 text-white' : 'text-slate-300 hover:bg-white/10' }} transition">Plugins</a>
        <a href="{{ url('/') }}" class="block rounded-xl px-4 py-3 text-slate-300 hover:bg-white/10 transition">View site</a>
    </nav>

    <form action="{{ route('admin.logout') }}" method="POST" class="pt-4 border-t border-white/10">
        @csrf
        <button class="w-full rounded-xl px-4 py-3 bg-white text-slate-950 font-semibold">Logout</button>
    </form>
</aside>