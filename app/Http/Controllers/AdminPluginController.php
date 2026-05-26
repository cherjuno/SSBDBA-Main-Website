<?php

namespace App\Http\Controllers;

use App\Models\Plugin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminPluginController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->string('search')->trim()->toString();
        $query = Plugin::query()->latest();

        if ($search !== '') {
            $query->where('name', 'like', "%{$search}%");
        }

        return view('admin.plugins.index', [
            'plugins' => $query->paginate(10)->withQueryString(),
            'search' => $search,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'version' => ['nullable', 'string', 'max:50'],
            'description' => ['nullable', 'string'],
            'plugin_file' => ['required', 'file', 'mimes:zip', 'max:20480'],
        ]);

        $path = $request->file('plugin_file')->store('plugins', 'public');

        Plugin::create([
            'name' => $data['name'],
            'slug' => Str::slug($data['name']) . '-' . Str::lower(Str::random(6)),
            'version' => $data['version'] ?? null,
            'description' => $data['description'] ?? null,
            'file_path' => $path,
            'is_enabled' => true,
            'user_id' => $request->user()?->id,
        ]);

        return back()->with('status', 'Plugin berhasil diunggah.');
    }

    public function toggle(Plugin $plugin)
    {
        $plugin->update(['is_enabled' => ! $plugin->is_enabled]);

        return back()->with('status', 'Status plugin berhasil diperbarui.');
    }
}