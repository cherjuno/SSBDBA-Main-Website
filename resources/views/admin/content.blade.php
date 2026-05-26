@extends('admin.layouts.app')

@section('content')
<div class="p-6 lg:p-10 space-y-8">
    <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-4">
        <div>
            <p class="text-xs uppercase tracking-[0.3em] text-orange-500 font-bold mb-2">Content editor</p>
            <h2 class="text-3xl font-bold text-slate-900">Landing page content</h2>
            <p class="text-slate-500 mt-2">Semua perubahan di sini akan tampil di halaman depan.</p>
        </div>
        <a href="{{ url('/') }}" class="inline-flex items-center justify-center rounded-xl border border-slate-300 bg-white px-5 py-3 font-semibold text-slate-700">View site</a>
    </div>

    @if (session('status'))
        <div class="rounded-xl bg-emerald-50 border border-emerald-200 px-4 py-3 text-emerald-700">{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('admin.content.update') }}" class="space-y-8">
        @csrf
        @method('PUT')
        @foreach ($sections as $section)
            <section class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                <div class="border-b border-slate-200 px-6 py-4 bg-slate-50">
                    <h3 class="text-xl font-bold text-slate-900">{{ $section['title'] }}</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6">
                    @foreach ($section['fields'] as $field)
                        <div class="{{ $field['type'] === 'textarea' ? 'md:col-span-2' : '' }}">
                            <label for="{{ $field['key'] }}" class="block text-sm font-semibold text-slate-700 mb-2">{{ $field['label'] }}</label>
                            @if ($field['type'] === 'textarea')
                                <textarea id="{{ $field['key'] }}" name="{{ $field['key'] }}" rows="4" class="w-full rounded-xl border-slate-300 focus:border-blue-600 focus:ring-blue-600">{{ old($field['key'], $content[$field['key']] ?? '') }}</textarea>
                            @else
                                <input id="{{ $field['key'] }}" name="{{ $field['key'] }}" value="{{ old($field['key'], $content[$field['key']] ?? '') }}" class="w-full rounded-xl border-slate-300 focus:border-blue-600 focus:ring-blue-600">
                            @endif
                            @error($field['key'])
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    @endforeach
                </div>
            </section>
        @endforeach

        <div class="flex justify-end">
            <button type="submit" class="rounded-xl bg-slate-950 px-6 py-3 font-semibold text-white hover:bg-slate-800 transition">Save changes</button>
        </div>
    </form>
</div>
@endsection