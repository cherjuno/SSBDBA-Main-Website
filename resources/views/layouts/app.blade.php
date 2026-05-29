<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', __('ui.page_title'))</title>
    <meta name="description" content="{{ __('ui.meta_description') }}">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')

    <style>
        /* Global Styles */
        :root {
            --primary-color: #063e9c;
            --secondary-color: #30ceff;
            --text-dark-color: #183447;
            --text-light-color: #7093be;
            --background-light-color: #deedfd;
            --light-color: #fefefe;
            --accent-color: #ff8a00;
            --section-padding: 5rem 0;
        }

        html {
            scroll-behavior: smooth;
        }

        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 0.6s ease-out;
        }

        .slide-in-up {
            animation: slideInUp 0.7s ease-out;
        }

        .page-shell {
            background:
                radial-gradient(circle at top right, rgba(48, 206, 255, 0.12), transparent 30%),
                radial-gradient(circle at bottom left, rgba(255, 138, 0, 0.10), transparent 28%),
                var(--light-color);
        }

        /* Header Navigation */
        header {
            box-shadow: 0 2px 8px rgba(24, 52, 71, 0.08);
            background: rgba(254, 254, 254, 0.95);
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 50;
        }

        nav {
            animation: slideInDown 0.5s ease-out;
        }

        nav a,
        nav button {
            outline: none;
        }

        /* Navigation Links */
        .nav-link {
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            color: var(--text-dark-color);
            font-weight: 500;
            font-size: 0.875rem;
            position: relative;
            padding-bottom: 2px;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--accent-color), var(--secondary-color));
            transition: width 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .nav-link:hover {
            color: var(--primary-color);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link.active {
            color: var(--accent-color);
        }

        .nav-link.active::after {
            width: 100%;
        }

        /* Buttons */
        .btn {
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 8px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color) 0%, #0052cc 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(6, 62, 156, 0.2);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(6, 62, 156, 0.35);
        }

        .btn-accent {
            background: linear-gradient(135deg, var(--accent-color) 0%, #ffb700 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(255, 138, 0, 0.2);
        }

        .btn-accent:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 138, 0, 0.35);
        }

        /* Cards */
        .card {
            background: white;
            border-radius: 12px;
            border: 1px solid rgba(24, 52, 71, 0.08);
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(24, 52, 71, 0.12);
            border-color: rgba(6, 62, 156, 0.2);
        }

        /* Sections */
        .section {
            padding: var(--section-padding);
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-dark-color);
            margin-bottom: 0.5rem;
            letter-spacing: -0.5px;
        }

        .section-subtitle {
            font-size: 1.125rem;
            color: var(--text-light-color);
            font-weight: 400;
            line-height: 1.6;
        }

        /* Text */
        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
            color: var(--text-dark-color);
            letter-spacing: -0.3px;
        }

        p {
            line-height: 1.7;
            color: var(--text-light-color);
        }

        /* Forms */
        input, textarea, select {
            background: #f8f9fa;
            border: 1.5px solid rgba(24, 52, 71, 0.12);
            border-radius: 8px;
            padding: 0.875rem 1rem;
            font-size: 1rem;
            transition: all 0.35s ease;
            font-family: inherit;
        }

        input:focus, textarea:focus, select:focus {
            outline: none;
            background: white;
            border-color: #063e9c;
            box-shadow: 0 0 0 3px rgba(6, 62, 156, 0.1);
        }

        /* Utilities */
        .shadow-sm {
            box-shadow: 0 1px 3px rgba(24, 52, 71, 0.06);
        }

        .shadow-md {
            box-shadow: 0 4px 12px rgba(24, 52, 71, 0.1);
        }

        .shadow-lg {
            box-shadow: 0 10px 30px rgba(24, 52, 71, 0.12);
        }

        .section-anchor {
            scroll-margin-top: 6.5rem;
        }
    </style>
</head>
<body class="page-shell text-text-dark">
    <!-- Header Navigation -->
    <header>
        @php
            $locale = app()->getLocale();
            $languageToggleUrl = fn (string $language) => request()->fullUrlWithQuery(['lang' => $language]);
        @endphp
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 md:py-4 flex justify-between items-center gap-3 md:gap-4">
            <div class="flex items-center space-x-4 min-w-0">
                <a href="#" class="flex-shrink-0">
                    <img src="{{ asset('datalablogo.png') }}" alt="SSBDA Lab Logo" class="h-14 sm:h-16 md:h-20 lg:h-24 w-auto">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex gap-4 text-xs items-center">
                <a href="#who-we-are" class="nav-link scroll-link" data-section="who-we-are">{{ __('ui.nav_who_we_are') }}</a>
                <a href="#what-we-do" class="nav-link scroll-link" data-section="what-we-do">{{ __('ui.nav_what_we_do') }}</a>
                <a href="#resources-services" class="nav-link scroll-link" data-section="resources-services">{{ __('ui.nav_resources_services') }}</a>
                <a href="#events" class="nav-link scroll-link" data-section="events">{{ __('ui.nav_events') }}</a>
                <a href="#people" class="nav-link scroll-link" data-section="people">{{ __('ui.nav_people') }}</a>
                <a href="#connect" class="nav-link scroll-link" data-section="connect">{{ __('ui.nav_connect') }}</a>
            </div>

            <div class="flex items-center gap-2 md:gap-3">
                <div class="inline-flex items-center rounded-full border border-secondary-2 bg-white p-1 text-[0.65rem] sm:text-[0.7rem] font-semibold uppercase tracking-[0.16em] sm:tracking-[0.2em]">
                    <a href="{{ $languageToggleUrl('en') }}" class="rounded-full px-3 py-1 transition {{ $locale === 'en' ? 'bg-primary text-white' : 'text-text-light hover:text-primary' }}">EN</a>
                    <a href="{{ $languageToggleUrl('id') }}" class="rounded-full px-3 py-1 transition {{ $locale === 'id' ? 'bg-primary text-white' : 'text-text-light hover:text-primary' }}">ID</a>
                </div>

                <!-- Mobile Menu Toggle -->
                <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-200 shadow-lg">
            <div class="px-4 py-4 space-y-3 max-w-7xl mx-auto">
                <div class="flex justify-center gap-2 pb-2">
                    <a href="{{ $languageToggleUrl('en') }}" class="rounded-full px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] {{ $locale === 'en' ? 'bg-primary text-white' : 'bg-secondary-3 text-text-dark' }}">EN</a>
                    <a href="{{ $languageToggleUrl('id') }}" class="rounded-full px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] {{ $locale === 'id' ? 'bg-primary text-white' : 'bg-secondary-3 text-text-dark' }}">ID</a>
                </div>
                <a href="#who-we-are" class="block nav-link py-2 px-4 text-center rounded-lg hover:bg-secondary-3 transition-colors scroll-link" data-section="who-we-are">{{ __('ui.nav_who_we_are') }}</a>
                <a href="#what-we-do" class="block nav-link py-2 px-4 text-center rounded-lg hover:bg-secondary-3 transition-colors scroll-link" data-section="what-we-do">{{ __('ui.nav_what_we_do') }}</a>
                <a href="#resources-services" class="block nav-link py-2 px-4 text-center rounded-lg hover:bg-secondary-3 transition-colors scroll-link" data-section="resources-services">{{ __('ui.nav_resources_services') }}</a>
                <a href="#events" class="block nav-link py-2 px-4 text-center rounded-lg hover:bg-secondary-3 transition-colors scroll-link" data-section="events">{{ __('ui.nav_events') }}</a>
                <a href="#people" class="block nav-link py-2 px-4 text-center rounded-lg hover:bg-secondary-3 transition-colors scroll-link" data-section="people">{{ __('ui.nav_people') }}</a>
                <a href="#connect" class="block nav-link py-2 px-4 text-center rounded-lg hover:bg-secondary-3 transition-colors scroll-link" data-section="connect">{{ __('ui.nav_connect') }}</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')

        <footer class="relative overflow-hidden bg-[linear-gradient(180deg,#08192d_0%,#0f2747_100%)] text-white">
            @php
                $footerContent = $content ?? config('landing.defaults');
                $socialLinks = array_filter([
                    'instagram' => $footerContent['contact_instagram'] ?? '',
                    'linkedin' => $footerContent['contact_linkedin'] ?? '',
                    'youtube' => $footerContent['contact_youtube'] ?? '',
                    'tiktok' => $footerContent['contact_tiktok'] ?? '',
                    'facebook' => $footerContent['contact_facebook'] ?? '',
                ]);
            @endphp

            <div class="absolute inset-0 pointer-events-none opacity-70">
                <div class="absolute -top-28 -right-20 h-80 w-80 rounded-full bg-secondary/20 blur-3xl"></div>
                <div class="absolute -bottom-28 -left-20 h-80 w-80 rounded-full bg-accent/15 blur-3xl"></div>
            </div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-12 lg:py-14">
                <div class="rounded-[2rem] border border-white/10 bg-white/6 backdrop-blur-sm shadow-2xl shadow-black/15 p-6 sm:p-8 lg:p-10">
                    <div class="flex flex-col gap-8 xl:grid xl:grid-cols-[1.4fr_1fr_1fr] xl:gap-10">
                        <div class="space-y-5">
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('datalablogo.png') }}" alt="SSBDA Lab Logo" class="h-12 sm:h-14 w-auto shrink-0">
                                <div class="hidden sm:block h-10 w-px bg-white/20"></div>
                                <div class="hidden sm:block">
                                    <p class="text-[0.65rem] sm:text-xs uppercase tracking-[0.3em] text-white/55">{{ __('ui.footer_lab_name') }}</p>
                                    <p class="text-xs text-white/70 mt-1">{{ __('ui.footer_school') }}</p>
                                </div>
                            </div>

                            <div class="space-y-3 max-w-xl">
                                <h3 class="text-2xl sm:text-3xl font-semibold text-white leading-tight">{{ __('ui.footer_lab_name') }}</h3>
                                <p class="text-white/75 text-sm sm:text-base leading-7 max-w-2xl">{{ $footerContent['contact_address'] ?? 'SSDATALAB, Labtek XIX, 3rd Floor, Jl. Ganesha Nol 10, Bandung 40132' }}</p>
                            </div>

                            <div class="flex flex-wrap items-center gap-3 sm:gap-4">
                                <div class="inline-flex items-center gap-3 rounded-full border border-white/15 bg-white/8 px-4 py-2">
                                    <span class="text-[0.65rem] sm:text-xs uppercase tracking-[0.25em] text-white/65">{{ __('ui.part_of') }}</span>
                                    <img src="{{ asset('sbmlogo.png') }}" alt="SBM ITB Logo" class="h-7 sm:h-8 w-auto">
                                </div>
                                <div class="inline-flex items-center gap-3 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-white/75">
                                    <span class="font-semibold text-white">{{ __('ui.footer_email') }}</span>
                                    <a href="mailto:{{ $footerContent['contact_email'] ?? '' }}" class="break-all hover:text-secondary transition">{{ $footerContent['contact_email'] ?? '' }}</a>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4 sm:gap-5">
                            <div class="rounded-2xl border border-white/10 bg-white/5 p-4 sm:p-5">
                                <h4 class="font-semibold text-white mb-4">{{ __('ui.quick_links') }}</h4>
                                <ul class="space-y-3 text-sm sm:text-[0.95rem]">
                                    <li><a href="#who-we-are" class="text-white/75 hover:text-secondary transition">{{ __('ui.nav_who_we_are') }}</a></li>
                                    <li><a href="#what-we-do" class="text-white/75 hover:text-secondary transition">{{ __('ui.nav_what_we_do') }}</a></li>
                                    <li><a href="#resources-services" class="text-white/75 hover:text-secondary transition">{{ __('ui.nav_resources_services') }}</a></li>
                                    <li><a href="#events" class="text-white/75 hover:text-secondary transition">{{ __('ui.nav_events') }}</a></li>
                                    <li><a href="#people" class="text-white/75 hover:text-secondary transition">{{ __('ui.nav_people') }}</a></li>
                                    <li><a href="#connect" class="text-white/75 hover:text-secondary transition">{{ __('ui.nav_connect') }}</a></li>
                                </ul>
                            </div>

                            <div class="rounded-2xl border border-white/10 bg-white/5 p-4 sm:p-5">
                                <h4 class="font-semibold text-white mb-4">{{ __('ui.follow_us') }}</h4>
                                @if (count($socialLinks) > 0)
                                    <div class="flex flex-wrap gap-2 sm:gap-3">
                                        @if (! empty($socialLinks['instagram']))
                                            <a href="{{ $socialLinks['instagram'] }}" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/12 bg-white/8 text-white/80 transition hover:-translate-y-0.5 hover:bg-white/15 hover:text-secondary">
                                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M7.75 2h8.5A5.76 5.76 0 0 1 22 7.75v8.5A5.76 5.76 0 0 1 16.25 22h-8.5A5.76 5.76 0 0 1 2 16.25v-8.5A5.76 5.76 0 0 1 7.75 2Zm0 2A3.76 3.76 0 0 0 4 7.75v8.5A3.76 3.76 0 0 0 7.75 20h8.5A3.76 3.76 0 0 0 20 16.25v-8.5A3.76 3.76 0 0 0 16.25 4h-8.5Zm4.25 3a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm5.1-2.35a1.15 1.15 0 1 1 0 2.3 1.15 1.15 0 0 1 0-2.3Z"/></svg>
                                            </a>
                                        @endif
                                        @if (! empty($socialLinks['linkedin']))
                                            <a href="{{ $socialLinks['linkedin'] }}" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/12 bg-white/8 text-white/80 transition hover:-translate-y-0.5 hover:bg-white/15 hover:text-secondary">
                                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M4.98 3.5C4.98 4.88 3.89 6 2.5 6S0 4.88 0 3.5 1.11 1 2.5 1 4.98 2.12 4.98 3.5ZM0 8h5v16H0V8Zm7.5 0H12v2.2h.1c.6-1.1 2.1-2.2 4.3-2.2C21 8 22 11 22 15.2V24h-5v-7.8c0-1.9 0-4.3-2.6-4.3s-3 2-3 4.1V24h-5V8Z"/></svg>
                                            </a>
                                        @endif
                                        @if (! empty($socialLinks['youtube']))
                                            <a href="{{ $socialLinks['youtube'] }}" target="_blank" rel="noopener noreferrer" aria-label="YouTube" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/12 bg-white/8 text-white/80 transition hover:-translate-y-0.5 hover:bg-white/15 hover:text-secondary">
                                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M21.8 8s-.2-1.4-.9-2c-.9-.9-1.9-.9-2.4-1C15 4.6 12 4.6 12 4.6h0s-3 0-6.5.4c-.5.1-1.5.1-2.4 1-.7.6-.9 2-.9 2S2 9.5 2 11v2c0 1.5.2 3 .2 3s.2 1.4.9 2c.9.9 2 .9 2.5 1 1.8.2 7.4.4 7.4.4s3 0 6.5-.4c.5-.1 1.5-.1 2.4-1 .7-.6.9-2 .9-2s.2-1.5.2-3v-2c0-1.5-.2-3-.2-3ZM9.7 15.2V8.8l6 3.2-6 3.2Z"/></svg>
                                            </a>
                                        @endif
                                        @if (! empty($socialLinks['tiktok']))
                                            <a href="{{ $socialLinks['tiktok'] }}" target="_blank" rel="noopener noreferrer" aria-label="TikTok" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/12 bg-white/8 text-white/80 transition hover:-translate-y-0.5 hover:bg-white/15 hover:text-secondary">
                                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M17 3c.4 2.2 1.8 3.8 4 4v3.1c-1.5 0-2.9-.4-4-1.2v5.7c0 3.4-2.7 6.1-6.1 6.1S4.8 18 4.8 14.6s2.7-6.1 6.1-6.1c.3 0 .6 0 1 .1v3.2c-.3-.1-.7-.2-1-.2-1.6 0-2.9 1.3-2.9 2.9 0 1.6 1.3 2.9 2.9 2.9 1.7 0 3-1.3 3-3V3h3.1Z"/></svg>
                                            </a>
                                        @endif
                                        @if (! empty($socialLinks['facebook']))
                                            <a href="{{ $socialLinks['facebook'] }}" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/12 bg-white/8 text-white/80 transition hover:-translate-y-0.5 hover:bg-white/15 hover:text-secondary">
                                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.99 3.66 9.13 8.44 9.88v-6.99h-2.54V12h2.54V9.8c0-2.5 1.49-3.89 3.78-3.89 1.09 0 2.23.19 2.23.19v2.45h-1.26c-1.24 0-1.63.77-1.63 1.57V12h2.77l-.44 2.89h-2.33v6.99C18.34 21.13 22 16.99 22 12Z" clip-rule="evenodd"/></svg>
                                            </a>
                                        @endif
                                    </div>
                                @else
                                    <p class="text-sm text-white/65 leading-6">{{ __('ui.social_placeholder') }}</p>
                                @endif

                                <div class="mt-5 rounded-xl border border-white/10 bg-white/5 p-4">
                                    <p class="text-xs uppercase tracking-[0.2em] text-white/55 mb-2">{{ __('ui.footer_website') }}</p>
                                    <a href="{{ $footerContent['contact_website_url'] ?? '#' }}" class="text-white font-semibold hover:text-secondary transition break-all">{{ $footerContent['contact_website'] ?? 'ssbdba.itb.ac.id' }}</a>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4 sm:p-5 xl:col-span-3">
                            <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                                <div class="space-y-2">
                                    <p class="text-xs uppercase tracking-[0.22em] text-white/55">{{ __('ui.footer_contact') }}</p>
                                    <p class="text-sm sm:text-base text-white/75 leading-7">
                                        {{ $footerContent['contact_address'] ?? 'SSDATALAB, Labtek XIX, 3rd Floor, Jl. Ganesha Nol 10, Bandung 40132' }}
                                    </p>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 w-full md:max-w-xl">
                                    <a href="mailto:{{ $footerContent['contact_email'] ?? '' }}" class="flex items-center justify-between rounded-xl border border-white/10 bg-white/6 px-4 py-3 text-sm sm:text-base text-white/80 transition hover:-translate-y-0.5 hover:bg-white/10 hover:text-secondary">
                                        <span class="font-medium">{{ __('ui.footer_email') }}</span>
                                        <span class="break-all text-right">{{ $footerContent['contact_email'] ?? '' }}</span>
                                    </a>
                                    <a href="{{ $footerContent['contact_website_url'] ?? '#' }}" class="flex items-center justify-between rounded-xl border border-white/10 bg-white/6 px-4 py-3 text-sm sm:text-base text-white/80 transition hover:-translate-y-0.5 hover:bg-white/10 hover:text-secondary">
                                        <span class="font-medium">{{ __('ui.footer_website') }}</span>
                                        <span class="break-all text-right">{{ $footerContent['contact_website'] ?? 'ssbdba.itb.ac.id' }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 border-t border-white/10 pt-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between text-sm text-white/60">
                        <p>&copy; {{ date('Y') }} SSBDA Laboratory. {{ __('ui.footer_rights') }}</p>
                        <p class="uppercase tracking-[0.2em] text-[0.65rem] text-white/45">{{ __('ui.footer_lab_name') }}</p>
                    </div>
                </div>
            </div>
        </footer>

    <a href="#" id="back-to-top" class="fixed bottom-8 right-8 bg-accent text-light w-12 h-12 rounded-full shadow-lg flex items-center justify-center opacity-0 invisible transition-all duration-300 hover:bg-opacity-90">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
    </a>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Back to top button
            const backToTopButton = document.getElementById('back-to-top');
            window.addEventListener('scroll', () => {
                if (window.pageYOffset > 300) {
                    backToTopButton.classList.remove('opacity-0', 'invisible');
                    backToTopButton.classList.add('opacity-100', 'visible');
                } else {
                    backToTopButton.classList.remove('opacity-100', 'visible');
                    backToTopButton.classList.add('opacity-0', 'invisible');
                }
            });

            // Active nav link highlighting on scroll
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        navLinks.forEach(link => {
                            link.classList.remove('active');
                            if (link.getAttribute('href').substring(1) === entry.target.id) {
                                link.classList.add('active');
                            }
                        });
                    }
                });
            }, { threshold: 0.5 });

            sections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>

    @stack('scripts')
</body>
</html>
