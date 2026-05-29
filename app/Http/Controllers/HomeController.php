<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\People;
use App\Models\Contact;
use App\Models\ResearchProposal;
use App\Models\SiteContent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private const ADMIN_CONTENT_KEYS = [
        'contact_email',
        'contact_website',
        'contact_website_url',
        'contact_address',
        'contact_linkedin',
        'contact_instagram',
        'contact_tiktok',
        'contact_facebook',
        'contact_youtube',
        'contact_phone',
        'resource_open_learning_url',
        'resource_open_learning_link',
    ];

    public function index(Request $request)
    {
        $locale = $request->query('lang', $request->session()->get('site_locale', 'en'));

        if (! in_array($locale, ['en', 'id'], true)) {
            $locale = 'en';
        }

        $request->session()->put('site_locale', $locale);
        app()->setLocale($locale);

        $upcomingEvents = Event::where('type', 'upcoming')->get();
        $pastEvents = Event::where('type', 'past')->get();
        $people = People::orderBy('order')->get();
        $content = array_merge(config('landing.defaults'), config("landing.locale_overrides.{$locale}", []));
        $adminContent = SiteContent::query()->pluck('content_value', 'content_key')->all();

        foreach (self::ADMIN_CONTENT_KEYS as $key) {
            if (array_key_exists($key, $adminContent)) {
                $content[$key] = $adminContent[$key];
            }
        }

        return view('home', [
            'locale' => $locale,
            'upcomingEvents' => $upcomingEvents,
            'pastEvents' => $pastEvents,
            'people' => $people,
            'content' => $content,
        ]);
    }

    public function storeContact()
    {
        $validated = request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return response()->json(['message' => 'Pesan Anda telah dikirim. Terima kasih!'], 200);
    }

    public function storeResearchProposal()
    {
        $validated = request()->validate([
            'researcher_name' => 'required|string|max:255',
            'researcher_email' => 'required|email|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        ResearchProposal::create($validated);

        return response()->json(['message' => 'Proposal riset Anda telah dikirim. Kami akan menghubungi Anda segera!'], 200);
    }
}
