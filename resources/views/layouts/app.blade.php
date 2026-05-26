<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SSBDA Lab - Social Simulation & Big Data Analytics Laboratory')</title>
    <meta name="description" content="Social Simulation & Big Data Analytics Laboratory - Laboratorium penelitian sosial simulasi dan analitik big data">
    
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
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <!-- Logo with Image -->
            <div class="flex items-center space-x-4">
                <a href="#" class="flex-shrink-0">
                    <img src="{{ asset('datalablogo.png') }}" alt="SSBDA Lab Logo" class="h-14 w-auto">
                </a>
                <div class="hidden sm:block border-l border-secondary-2 pl-4">
                    <h1 class="text-primary font-bold text-lg leading-tight">SSBDA Lab</h1>
                    <p class="text-xs text-secondary-2 font-medium">Social Simulation & Big Data Analytics</p>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex gap-4 text-xs items-center">
                <a href="#who-we-are" class="nav-link scroll-link" data-section="who-we-are">Who we are</a>
                <a href="#what-we-do" class="nav-link scroll-link" data-section="what-we-do">What we do</a>
                <a href="#resources-services" class="nav-link scroll-link" data-section="resources-services">Resources and Services</a>
                <a href="#events" class="nav-link scroll-link" data-section="events">Events</a>
                <a href="#people" class="nav-link scroll-link" data-section="people">People</a>
                <a href="#connect" class="nav-link scroll-link" data-section="connect">Connect</a>
            </div>

            <!-- Mobile Menu Toggle -->
            <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200 shadow-lg">
            <div class="px-4 py-4 space-y-3 max-w-7xl mx-auto">
                <a href="#who-we-are" class="block nav-link py-2 px-4 text-center rounded-lg hover:bg-secondary-3 transition-colors scroll-link" data-section="who-we-are">Who we are</a>
                <a href="#what-we-do" class="block nav-link py-2 px-4 text-center rounded-lg hover:bg-secondary-3 transition-colors scroll-link" data-section="what-we-do">What we do</a>
                <a href="#resources-services" class="block nav-link py-2 px-4 text-center rounded-lg hover:bg-secondary-3 transition-colors scroll-link" data-section="resources-services">Resources and Services</a>
                <a href="#events" class="block nav-link py-2 px-4 text-center rounded-lg hover:bg-secondary-3 transition-colors scroll-link" data-section="events">Events</a>
                <a href="#people" class="block nav-link py-2 px-4 text-center rounded-lg hover:bg-secondary-3 transition-colors scroll-link" data-section="people">People</a>
                <a href="#connect" class="block nav-link py-2 px-4 text-center rounded-lg hover:bg-secondary-3 transition-colors scroll-link" data-section="connect">Connect</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')

        <footer class="bg-text-dark text-background-light">
            <div class="max-w-7xl mx-auto px-4 py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="md:col-span-2">
                        <h3 class="text-xl font-bold text-light mb-4">SSBDA Laboratory</h3>
                        <p class="text-text-light max-w-md">
                            Laboratorium riset Social Simulation & Big Data Analytics (SSBDA) berfokus pada pemodelan kompleksitas sosial dan analisis data skala besar untuk memahami dinamika masyarakat.
                        </p>
                    </div>
                    <div>
                        <h4 class="font-semibold text-light mb-4">Quick Links</h4>
                        <ul class="space-y-2">
                            <li><a href="#who-we-are" class="text-text-light hover:text-accent transition">Who we are</a></li>
                            <li><a href="#what-we-do" class="text-text-light hover:text-accent transition">What we do</a></li>
                            <li><a href="#resources-services" class="text-text-light hover:text-accent transition">Resources and Services</a></li>
                            <li><a href="#events" class="text-text-light hover:text-accent transition">Events</a></li>
                            <li><a href="#people" class="text-text-light hover:text-accent transition">People</a></li>
                            <li><a href="#connect" class="text-text-light hover:text-accent transition">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold text-light mb-4">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="text-text-light hover:text-accent transition">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                            </a>
                            <a href="#" class="text-text-light hover:text-accent transition">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                            </a>
                            <a href="#" class="text-text-light hover:text-accent transition">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12.019c0 3.443 1.717 6.45 4.315 8.217-.186.85-.73 2.955-.73 2.955s.227-.118.612-.39c.385-.272.965-.67 1.515-1.026A10.03 10.03 0 0012 22.019c5.523 0 10-4.477 10-10.001S17.523 2 12 2zm-1.025 8.885a1.12 1.12 0 11-2.24 0 1.12 1.12 0 012.24 0zm4.26 0a1.12 1.12 0 11-2.24 0 1.12 1.12 0 012.24 0zm-2.13-3.64a1.12 1.12 0 11-2.24 0 1.12 1.12 0 012.24 0z" clip-rule="evenodd" /></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-8 border-t border-gray-700 pt-6 text-center text-text-light text-sm">
                    <p>&copy; {{ date('Y') }} SSBDA Laboratory. All Rights Reserved.</p>
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
