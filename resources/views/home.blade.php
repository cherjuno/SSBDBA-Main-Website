@extends('layouts.app')

@php
    $c = $content ?? config('landing.defaults');
    $teamRoles = app()->getLocale() === 'id' ? [
        'Kepala/Director',
        'Koordinator Operasional & Kemitraan',
        'Liaison Akademik',
        'Lead Skill Development Track',
        'Lead Workshop and Bootcamp',
        'Lead Big Data & Machine Learning',
        'Lead Social Simulation & ABM',
    ] : [
        'Head/Director',
        'Operation & Partnership Lead',
        'Academic Liaison',
        'Lead Skill Development Track',
        'Lead Workshops and Bootcamp',
        'Lead Big Data & Machine Learning',
        'Lead Social Simulation & ABM',
    ];

    $resources = [
        ['title' => $c['resource_open_learning_title'], 'description' => $c['resource_open_learning_description'], 'link' => $c['resource_open_learning_link'] ?? null, 'url' => $c['resource_open_learning_url'] ?? ''],
        ['title' => $c['resource_module_title'], 'description' => $c['resource_module_description']],
        ['title' => $c['resource_dataset_title'], 'description' => $c['resource_dataset_description']],
        ['title' => $c['resource_workshops_title'], 'description' => $c['resource_workshops_description']],
        ['title' => $c['resource_intern_title'], 'description' => $c['resource_intern_description']],
        ['title' => $c['resource_cosmos_title'], 'description' => $c['resource_cosmos_description']],
    ];

    $events = [
        ['title' => $c['event_1_title'], 'description' => $c['event_1_description']],
        ['title' => $c['event_2_title'], 'description' => $c['event_2_description']],
        ['title' => $c['event_3_title'], 'description' => $c['event_3_description']],
        ['title' => $c['event_4_title'], 'description' => $c['event_4_description']],
        ['title' => $c['event_5_title'], 'description' => $c['event_5_description']],
        ['title' => $c['event_6_title'], 'description' => $c['event_6_description']],
    ];
@endphp

@push('head')
<style>
    .section-kicker {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        font-size: 0.72rem;
        font-weight: 700;
        color: var(--accent-color);
    }

    .section-kicker::before {
        content: '';
        width: 2rem;
        height: 2px;
        border-radius: 9999px;
        background: linear-gradient(90deg, var(--accent-color), var(--secondary-color));
    }

    .corner-pattern {
        position: absolute;
        inset: 0;
        pointer-events: none;
        overflow: hidden;
    }

    .corner-pattern::before,
    .corner-pattern::after {
        content: '';
        position: absolute;
        width: 18rem;
        height: 18rem;
        opacity: 0.45;
        border-radius: 2rem;
        background:
            radial-gradient(circle at 20% 20%, rgba(255, 138, 0, 0.18) 0 1.5px, transparent 1.75px),
            radial-gradient(circle at 80% 80%, rgba(48, 206, 255, 0.18) 0 1.5px, transparent 1.75px),
            linear-gradient(135deg, rgba(6, 62, 156, 0.08), rgba(255, 138, 0, 0.05));
        background-size: 18px 18px, 18px 18px, cover;
        mask-image: linear-gradient(135deg, black 45%, transparent 100%);
    }

    .corner-pattern::before {
        top: -4rem;
        left: -4rem;
        transform: rotate(8deg);
    }

    .corner-pattern::after {
        right: -4rem;
        bottom: -4rem;
        transform: rotate(-10deg);
    }

    .hero-grid {
        background:
            linear-gradient(180deg, rgba(254, 254, 254, 0.96), rgba(222, 237, 253, 0.72)),
            linear-gradient(135deg, rgba(6, 62, 156, 0.06), rgba(48, 206, 255, 0.10));
    }

    .hero-stat {
        background: rgba(254, 254, 254, 0.85);
        border: 1px solid rgba(24, 52, 71, 0.08);
        border-radius: 1rem;
        padding: 1rem;
    }

    .what-card-media {
        height: 18rem;
        position: relative;
        overflow: hidden;
        background:
            linear-gradient(135deg, rgba(0, 0, 0, 0.20), rgba(0, 0, 0, 0.05)),
            linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    }

    .what-card-media::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(120deg, rgba(255,255,255,0.0) 35%, rgba(255,255,255,0.20) 50%, rgba(255,255,255,0.0) 65%),
            linear-gradient(rgba(255,255,255,0.12) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255,255,255,0.12) 1px, transparent 1px);
        background-size: 100% 100%, 22px 22px, 22px 22px;
        opacity: 0.5;
    }

    .what-card-media--2 {
        background:
            linear-gradient(135deg, rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.03)),
            linear-gradient(135deg, #dfe8f7, #9ec7f0);
    }

    .what-card-media--3 {
        background:
            linear-gradient(135deg, rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.03)),
            linear-gradient(135deg, #d7e8e4, #b4d8cf);
    }

    .what-card-media__accent {
        position: absolute;
        right: 1rem;
        bottom: 1rem;
        width: 4rem;
        height: 4rem;
        border-radius: 9999px;
        background: rgba(254, 254, 254, 0.18);
        border: 1px solid rgba(255, 255, 255, 0.32);
        backdrop-filter: blur(10px);
    }
</style>
@endpush

@section('content')

<!-- WHO WE ARE -->
<section id="who-we-are" class="section section-anchor relative px-4 pt-10 bg-light">
    <div class="corner-pattern"></div>
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <div class="fade-in">
                <span class="section-kicker">{{ __('ui.section_who_we_are') }}</span>
                <h1 class="mt-4 text-4xl md:text-6xl font-bold leading-tight text-text-dark">{{ $c['hero_title'] }}</h1>
                <p class="mt-6 text-lg text-text-light max-w-2xl">{{ $c['hero_description'] }}</p>
            </div>

            <div class="card hero-grid p-8 md:p-10">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="hero-stat">
                        <p class="text-xs uppercase tracking-[0.2em] text-accent font-bold mb-2">{{ __('ui.establish') }}</p>
                        <p class="text-sm text-text-light">{{ $c['who_establish'] }}</p>
                    </div>
                    <div class="hero-stat">
                        <p class="text-xs uppercase tracking-[0.2em] text-accent font-bold mb-2">{{ __('ui.value') }}</p>
                        <p class="text-sm text-text-light">{{ $c['who_value'] }}</p>
                    </div>
                    <div class="hero-stat">
                        <p class="text-xs uppercase tracking-[0.2em] text-accent font-bold mb-2">{{ __('ui.overview') }}</p>
                        <p class="text-sm text-text-light">{{ $c['who_overview'] }}</p>
                    </div>
                </div>
                <div class="mt-4 rounded-2xl border border-primary/10 bg-white/80 p-5">
                    <p class="text-xs uppercase tracking-[0.2em] text-accent font-bold mb-2">{{ __('ui.brand_guidelines') }}</p>
                    <p class="text-sm text-text-light">{{ $c['brand_guidelines_description'] ?? '' }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHAT WE DO -->
<section id="what-we-do" class="section section-anchor relative bg-background-light px-4">
    <div class="corner-pattern"></div>
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-12 items-start">
            <div class="slide-in-up xl:sticky xl:top-28">
                <span class="section-kicker">{{ __('ui.section_what_we_do') }}</span>
                <h2 class="section-title mt-4 max-w-lg">{{ $c['what_intro_title'] }}</h2>
                <p class="section-subtitle mt-6 max-w-xl">{{ $c['what_intro_description'] }}</p>
                <a href="#resources-services" class="btn btn-primary px-6 py-3 inline-flex mt-8">{{ __('ui.view_resources') }}</a>
            </div>

            <div class="grid grid-cols-1 gap-8">
                <article class="card overflow-hidden">
                    <div class="what-card-media">
                        <div class="what-card-media__accent"></div>
                    </div>
                    <div class="p-7 md:p-8">
                        <h3 class="text-2xl mb-3">{{ $c['what_card_1_title'] }}</h3>
                        <p class="mb-4">{{ $c['what_card_1_description'] }}</p>
                        <a href="#people" class="font-semibold text-primary hover:text-accent transition">{{ __('ui.learn_more') }} ↗</a>
                    </div>
                </article>

                <article class="card overflow-hidden">
                    <div class="what-card-media what-card-media--2">
                        <div class="what-card-media__accent"></div>
                    </div>
                    <div class="p-7 md:p-8">
                        <h3 class="text-2xl mb-3">{{ $c['what_card_2_title'] }}</h3>
                        <p class="mb-4">{{ $c['what_card_2_description'] }}</p>
                        <a href="#resources-services" class="font-semibold text-primary hover:text-accent transition">{{ __('ui.learn_more') }} ↗</a>
                    </div>
                </article>

                <article class="card overflow-hidden">
                    <div class="what-card-media what-card-media--3">
                        <div class="what-card-media__accent"></div>
                    </div>
                    <div class="p-7 md:p-8">
                        <h3 class="text-2xl mb-3">{{ $c['what_card_3_title'] }}</h3>
                        <p class="mb-4">{{ $c['what_card_3_description'] }}</p>
                        <a href="#events" class="font-semibold text-primary hover:text-accent transition">{{ __('ui.learn_more') }} ↗</a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- RESOURCES & SERVICES -->
<section id="resources-services" class="section section-anchor bg-light px-4">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-3xl mx-auto slide-in-up">
            <span class="section-kicker justify-center">{{ __('ui.section_resources_services') }}</span>
            <h2 class="section-title mt-4">{{ $c['resources_title'] }}</h2>
            <p class="section-subtitle mt-4">{{ $c['resources_description'] }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
            @foreach ($resources as $resource)
                <div class="card p-6">
                    <h3 class="text-xl mb-2">{{ $resource['title'] }}</h3>
                    <p class="mb-4">{{ $resource['description'] }}</p>
                    @if (! empty($resource['link']) && ! empty($resource['url']))
                        <a href="{{ $resource['url'] }}" class="btn btn-primary px-5 py-2 inline-flex">{{ $resource['link'] }}</a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- EVENTS -->
<section id="events" class="section section-anchor bg-background-light px-4">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-3xl mx-auto slide-in-up">
            <span class="section-kicker justify-center">{{ __('ui.section_events') }}</span>
            <h2 class="section-title mt-4">{{ $c['events_title'] }}</h2>
            <p class="section-subtitle mt-4">{{ $c['events_description'] }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 mt-10">
            @foreach ($events as $event)
                <div class="card p-6">
                    <p class="text-sm font-bold uppercase tracking-[0.2em] text-accent mb-3">{{ __('ui.event_label') }}</p>
                    <h3 class="text-xl mb-3">{{ $event['title'] }}</h3>
                    <p>{{ $event['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- PEOPLE -->
<section id="people" class="section section-anchor bg-light px-4">
    <div class="max-w-7xl mx-auto">
        <div class="max-w-3xl mx-auto text-center slide-in-up">
            <span class="section-kicker justify-center">{{ __('ui.section_people') }}</span>
            <h2 class="section-title mt-4">{{ $c['people_title'] }}</h2>
            <p class="section-subtitle mt-4">{{ $c['people_description'] }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 mt-10">
            @foreach ($teamRoles as $index => $role)
                <div class="card p-6">
                    <div class="flex items-start gap-4">
                        <div class="w-14 h-14 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center text-light font-bold text-lg flex-shrink-0">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</div>
                        <div>
                            <p class="text-xs uppercase tracking-[0.18em] text-accent font-bold mb-2">{{ $role }}</p>
                            <h3 class="text-xl mb-2">{{ $c['people_' . ($index + 1) . '_name'] }}</h3>
                            <p class="text-sm">{{ $c['people_' . ($index + 1) . '_bio'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CONNECT -->
<section id="connect" class="section section-anchor bg-background-light px-4">
    <div class="max-w-7xl mx-auto">
        <div class="max-w-3xl mx-auto text-center slide-in-up">
            <span class="section-kicker justify-center">{{ __('ui.section_connect') }}</span>
            <h2 class="section-title mt-4">{{ $c['connect_title'] }}</h2>
            <p class="section-subtitle mt-4">{{ $c['connect_description'] }}</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-10">
            <div class="card p-8">
                <h3 class="text-2xl mb-6">{{ __('ui.contact_details') }}</h3>
                <div class="space-y-4 text-text-light">
                    <p><strong class="text-text-dark">Email:</strong> {{ $c['contact_email'] }}</p>
                    <p><strong class="text-text-dark">Website:</strong> {{ $c['contact_website'] ?? 'ssbdba.itb.ac.id' }}</p>
                    <p><strong class="text-text-dark">Address:</strong> {{ $c['contact_address'] ?? '' }}</p>
                    <p><strong class="text-text-dark">LinkedIn:</strong> {{ $c['contact_linkedin'] }}</p>
                    <p><strong class="text-text-dark">Instagram:</strong> {{ $c['contact_instagram'] }}</p>
                    <p><strong class="text-text-dark">TikTok:</strong> {{ $c['contact_tiktok'] }}</p>
                    <p><strong class="text-text-dark">Facebook:</strong> {{ $c['contact_facebook'] }}</p>
                    <p><strong class="text-text-dark">YouTube:</strong> {{ $c['contact_youtube'] }}</p>
                    <p><strong class="text-text-dark">Phone:</strong> {{ $c['contact_phone'] }}</p>
                </div>
            </div>

            <div class="card p-8 bg-gradient-to-br from-primary to-secondary text-light">
                <h3 class="text-2xl text-light mb-6">{{ __('ui.quick_access') }}</h3>
                <p class="text-background-light mb-6">{{ __('ui.quick_access_description') }}</p>
                <div class="flex flex-wrap gap-3">
                    <a href="mailto:{{ $c['contact_email'] }}" class="btn bg-light text-primary px-5 py-3 inline-flex">{{ __('ui.email_us') }}</a>
                    <a href="#connect" class="btn bg-light/15 text-light px-5 py-3 inline-flex border border-white/20">{{ __('ui.follow_us') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection