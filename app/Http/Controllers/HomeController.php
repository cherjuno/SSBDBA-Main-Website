<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\People;
use App\Models\Contact;
use App\Models\ResearchProposal;
use App\Models\SiteContent;

class HomeController extends Controller
{
    public function index()
    {
        $upcomingEvents = Event::where('type', 'upcoming')->get();
        $pastEvents = Event::where('type', 'past')->get();
        $people = People::orderBy('order')->get();
        $content = array_merge(config('landing.defaults'), SiteContent::query()->pluck('content_value', 'content_key')->all());

        return view('home', [
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
