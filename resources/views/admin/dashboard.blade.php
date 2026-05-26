@extends('admin.layouts.app')

@section('page-title', 'Overview')
@section('page-subtitle', 'Summary of users, articles, and reading activity')

@section('content')
<div class="space-y-8">
    @if (session('status'))
        <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-700">{{ session('status') }}</div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
        <div class="rounded-2xl bg-white border border-slate-200 p-6 shadow-sm">
            <p class="text-sm text-slate-500 mb-2">Total User</p>
            <h3 class="text-3xl font-bold text-slate-900">{{ $totalUsers }}</h3>
        </div>
        <div class="rounded-2xl bg-white border border-slate-200 p-6 shadow-sm">
            <p class="text-sm text-slate-500 mb-2">Total Artikel</p>
            <h3 class="text-3xl font-bold text-slate-900">{{ $totalArticles }}</h3>
        </div>
        <div class="rounded-2xl bg-white border border-slate-200 p-6 shadow-sm">
            <p class="text-sm text-slate-500 mb-2">Total Article Views</p>
            <h3 class="text-3xl font-bold text-slate-900">{{ number_format($totalArticleViews) }}</h3>
        </div>
        <div class="rounded-2xl bg-slate-950 p-6 text-white shadow-sm">
            <p class="text-sm text-slate-300 mb-2">Read Rate</p>
            <h3 class="text-3xl font-bold">{{ $articleReadPercentage }}%</h3>
            <div class="mt-4 h-2 rounded-full bg-white/15 overflow-hidden">
                <div class="h-full rounded-full bg-orange-400" style="width: {{ min($articleReadPercentage, 100) }}%"></div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
        <div class="xl:col-span-2 rounded-2xl bg-white border border-slate-200 p-6 shadow-sm">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h3 class="text-xl font-bold text-slate-900">Statistik Artikel</h3>
                    <p class="text-sm text-slate-500">Contoh sederhana persentase pembaca dibanding total pengunjung.</p>
                </div>
                <span class="rounded-full bg-blue-50 px-3 py-1 text-sm font-semibold text-blue-700">{{ $articleReadPercentage }}%</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="rounded-2xl bg-slate-50 p-4">
                    <p class="text-sm text-slate-500">Total visitors</p>
                    <p class="mt-2 text-2xl font-bold text-slate-900">{{ number_format($totalVisitors) }}</p>
                </div>
                <div class="rounded-2xl bg-slate-50 p-4">
                    <p class="text-sm text-slate-500">Reads</p>
                    <p class="mt-2 text-2xl font-bold text-slate-900">{{ number_format($totalArticleViews) }}</p>
                </div>
                <div class="rounded-2xl bg-slate-50 p-4">
                    <p class="text-sm text-slate-500">Unread gap</p>
                    <p class="mt-2 text-2xl font-bold text-slate-900">{{ max($totalVisitors - $totalArticleViews, 0) }}</p>
                </div>
            </div>
        </div>

        <div class="rounded-2xl bg-white border border-slate-200 p-6 shadow-sm">
            <h3 class="text-xl font-bold text-slate-900 mb-4">Recent Articles</h3>
            <div class="space-y-4">
                @forelse ($recentArticles as $article)
                    <div class="rounded-xl bg-slate-50 p-4">
                        <p class="font-semibold text-slate-900">{{ $article->title }}</p>
                        <p class="text-sm text-slate-500 mt-1">{{ $article->category }} · {{ $article->views_count }} views</p>
                    </div>
                @empty
                    <p class="text-sm text-slate-500">Belum ada artikel.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection