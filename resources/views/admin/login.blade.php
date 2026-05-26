@extends('admin.layouts.guest')

@section('content')
<div class="min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl border border-slate-200 p-8">
        <div class="mb-8 text-center">
            <p class="text-xs uppercase tracking-[0.3em] text-orange-500 font-bold mb-2">Admin Login</p>
            <h2 class="text-3xl font-bold text-slate-900">Masuk ke panel admin</h2>
            <p class="text-sm text-slate-500 mt-2">Gunakan akun admin123 / admin1234.</p>
        </div>

        @if ($errors->any())
            <div class="mb-4 rounded-lg bg-red-50 border border-red-200 px-4 py-3 text-sm text-red-700">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.store') }}" class="space-y-5">
            @csrf
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2" for="username">Username</label>
                <input id="username" name="username" value="{{ old('username') }}" class="w-full rounded-xl border-slate-300 focus:border-blue-600 focus:ring-blue-600" placeholder="admin123">
            </div>
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2" for="password">Password</label>
                <input id="password" name="password" type="password" class="w-full rounded-xl border-slate-300 focus:border-blue-600 focus:ring-blue-600" placeholder="admin1234">
            </div>
            <button type="submit" class="w-full rounded-xl bg-slate-950 text-white font-semibold py-3 hover:bg-slate-800 transition">Login</button>
        </form>
    </div>
</div>
@endsection