<?php

namespace App\Http\Controllers;

use App\Models\SiteContent;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AdminContentController extends Controller
{
    private const URL_KEYS = [
        'contact_instagram',
        'contact_linkedin',
        'contact_youtube',
        'contact_tiktok',
        'contact_facebook',
        'contact_website_url',
        'resource_open_learning_url',
    ];

    private const SOCIAL_DOMAIN_RULES = [
        'contact_instagram' => ['instagram.com', 'www.instagram.com'],
        'contact_linkedin' => ['linkedin.com', 'www.linkedin.com', 'id.linkedin.com'],
        'contact_youtube' => ['youtube.com', 'www.youtube.com', 'm.youtube.com', 'youtu.be'],
        'contact_tiktok' => ['tiktok.com', 'www.tiktok.com', 'vm.tiktok.com', 'vt.tiktok.com'],
        'contact_facebook' => ['facebook.com', 'www.facebook.com', 'm.facebook.com', 'fb.com'],
    ];

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

                if (in_array($field['key'], self::URL_KEYS, true)) {
                    $rules[$field['key']] = ['nullable', 'url', 'max:255'];
                }
            }
        }

        $validated = $request->validate($rules);
        $validated = $this->normalizeUrlFields($validated);

        $domainErrors = $this->validateSocialDomains($validated);

        if (! empty($domainErrors)) {
            throw ValidationException::withMessages($domainErrors);
        }

        foreach ($validated as $key => $value) {
            SiteContent::updateOrCreate(
                ['content_key' => $key],
                ['content_value' => $value]
            );
        }

        return back()->with('status', 'Konten landing page berhasil diperbarui.');
    }

    private function normalizeUrlFields(array $validated): array
    {
        foreach (self::URL_KEYS as $key) {
            if (! array_key_exists($key, $validated) || empty($validated[$key])) {
                continue;
            }

            $value = trim((string) $validated[$key]);

            if ($value !== '' && ! preg_match('/^https?:\/\//i', $value)) {
                $value = 'https://' . ltrim($value, '/');
            }

            $validated[$key] = $value;
        }

        return $validated;
    }

    private function validateSocialDomains(array $validated): array
    {
        $errors = [];

        foreach (self::SOCIAL_DOMAIN_RULES as $key => $allowedDomains) {
            if (! array_key_exists($key, $validated) || empty($validated[$key])) {
                continue;
            }

            $host = parse_url((string) $validated[$key], PHP_URL_HOST);
            $host = is_string($host) ? strtolower($host) : '';

            if ($host === '' || ! in_array($host, $allowedDomains, true)) {
                $errors[$key] = [
                    'URL tidak sesuai platform. Gunakan domain resmi: ' . implode(', ', $allowedDomains) . '.',
                ];
            }
        }

        return $errors;
    }

    private function contentValues(): array
    {
        return array_merge(config('landing.defaults'), SiteContent::query()->pluck('content_value', 'content_key')->all());
    }
}