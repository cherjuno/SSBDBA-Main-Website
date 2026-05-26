<?php

namespace App\Http\Controllers;

use App\Models\SiteContent;
use Illuminate\Http\Request;

class AdminContentController extends Controller
{
    public function edit()
    {
        $content = $this->contentValues();

        return view('admin.content', [
            'content' => $content,
            'sections' => config('landing.sections'),
        ]);
    }

    public function update(Request $request)
    {
        $rules = [];

        foreach (config('landing.sections') as $section) {
            foreach ($section['fields'] as $field) {
                $rules[$field['key']] = ['nullable', 'string'];
            }
        }

        $validated = $request->validate($rules);

        foreach ($validated as $key => $value) {
            SiteContent::updateOrCreate(
                ['content_key' => $key],
                ['content_value' => $value]
            );
        }

        return back()->with('status', 'Konten landing page berhasil diperbarui.');
    }

    private function contentValues(): array
    {
        return array_merge(config('landing.defaults'), SiteContent::query()->pluck('content_value', 'content_key')->all());
    }
}