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
        /* Smooth scroll - override if needed */
        html {
            scroll-behavior: smooth;
        }

        /* Fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Additional inline styles if needed */
        .nav-link {
            transition: all 0.3s ease;
            color: #183447;
            font-weight: 500;
        }

        .nav-link:hover {
            color: #063e9c;
        }

        .nav-link.active {
            color: #ff8a00;
            border-bottom: 3px solid #ff8a00;
        }
    </style>
</head>
<body class="bg-[#fefefe] text-[#183447]">
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
            <div class="hidden md:flex space-x-8">
                <a href="#about" class="nav-link" data-section="about">About Us</a>
                <a href="#team" class="nav-link" data-section="team">Our Team</a>
                <a href="#portfolio" class="nav-link" data-section="portfolio">Portfolio</a>
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
                <a href="#about" class="block nav-link py-2 px-4 text-center rounded-lg hover:bg-secondary-3 transition-colors" data-section="about">About Us</a>
                <a href="#team" class="block nav-link py-2 px-4 text-center rounded-lg hover:bg-secondary-3 transition-colors" data-section="team">Our Team</a>
                <a href="#portfolio" class="block nav-link py-2 px-4 text-center rounded-lg hover:bg-secondary-3 transition-colors" data-section="portfolio">Portfolio</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-primary text-light py-16 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Top Section -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12 pb-12 border-b border-secondary-2/30">
                <!-- Logo & Branding -->
                <div class="fade-in">
                    <img src="{{ asset('sbmlogo.png') }}" alt="SBM ITB Logo" class="h-16 w-auto mb-4">
                    <p class="text-sm text-secondary-3 font-medium leading-relaxed">
                        School of Business & Management<br>
                        Institut Teknologi Bandung
                    </p>
                </div>

                <!-- About SSBDA -->
                <div class="fade-in">
                    <h3 class="text-lg font-bold mb-4 text-light">About SSBDA</h3>
                    <p class="text-secondary-3 text-sm leading-relaxed">
                        Laboratorium penelitian sosial simulasi dan analitik big data untuk inovasi dan pengembangan metodologi berbasis data.
                    </p>
                </div>

                <!-- Quick Links -->
                <div class="fade-in">
                    <h4 class="text-lg font-bold mb-4 text-light">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#about" class="text-secondary-3 hover:text-accent transition-colors font-medium">About Us</a></li>
                        <li><a href="#team" class="text-secondary-3 hover:text-accent transition-colors font-medium">Our Team</a></li>
                        <li><a href="#portfolio" class="text-secondary-3 hover:text-accent transition-colors font-medium">Portfolio</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="fade-in">
                    <h4 class="text-lg font-bold mb-4 text-light">Contact</h4>
                    <div class="space-y-2 text-sm text-secondary-3">
                        <div>
                            <p class="font-semibold text-accent mb-1">Email</p>
                            <a href="mailto:lab@ssbda.com" class="hover:text-light transition-colors break-all">lab@ssbda.com</a>
                        </div>
                        <div>
                            <p class="font-semibold text-accent mb-1">Phone</p>
                            <p>+62 (0)21 - 123 456</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Location Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12 pb-12 border-b border-secondary-2/30">
                <!-- Bandung -->
                <div class="fade-in">
                    <h4 class="text-lg font-bold mb-4 text-light">Bandung Campus</h4>
                    <div class="space-y-4 text-sm">
                        <div>
                            <p class="font-semibold text-accent mb-1">SBM ITB Main Campus</p>
                            <p class="text-secondary-3">Jalan Ganesha No.10, Lebak Siliwangi, Coblong, Bandung, Jawa Barat 40132, Indonesia</p>
                        </div>
                        <div>
                            <p class="font-semibold text-accent mb-1">MBA ITB Bandung Campus</p>
                            <p class="text-secondary-3">Jalan Gelap Nyawang No. 1, Bandung, Jawa Barat 40132, Indonesia</p>
                        </div>
                    </div>
                </div>

                <!-- Jakarta -->
                <div class="fade-in">
                    <h4 class="text-lg font-bold mb-4 text-light">Jakarta Campus</h4>
                    <div class="space-y-2 text-sm">
                        <p class="font-semibold text-accent mb-2">MBA ITB Jakarta Campus</p>
                        <p class="text-secondary-3">Graha Irama (Indorama), 12th floor Jl. HR. Rasuna Said Kav. 1-2 Jakarta 12950</p>
                    </div>
                </div>

                <!-- Jatinangor -->
                <div class="fade-in">
                    <h4 class="text-lg font-bold mb-4 text-light">Jatinangor Campus</h4>
                    <div class="space-y-2 text-sm">
                        <p class="font-semibold text-accent mb-2">ITB Jatinangor Campus</p>
                        <p class="text-secondary-3">Gedung B, Jl. Let. Jend. Purn. Dr. (HC) Mashudi No.1, Sayang, Jatinangor, Kabupaten Sumedang, Jawa Barat 45363</p>
                    </div>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="pt-8 text-center text-sm text-secondary-3 border-t border-secondary-2/30">
                <p>&copy; {{ date('Y') }} SSBDA Laboratory • Social Simulation & Big Data Analytics</p>
                <p class="mt-2 text-xs">School of Business and Management • Institut Teknologi Bandung</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn?.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when link is clicked
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // Scroll Spy
        function updateScrollSpy() {
            const sections = ['about', 'team', 'portfolio'];
            const scrollPosition = window.scrollY + 150;

            sections.forEach(section => {
                const element = document.getElementById(section);
                const link = document.querySelector(`a[data-section="${section}"]`);

                if (element && link) {
                    const elementTop = element.offsetTop;
                    const elementBottom = elementTop + element.offsetHeight;

                    if (scrollPosition >= elementTop && scrollPosition < elementBottom) {
                        document.querySelectorAll('.nav-link').forEach(l => {
                            l.classList.remove('active');
                        });
                        link.classList.add('active');
                    }
                }
            });
        }

        // Update scroll spy on scroll
        window.addEventListener('scroll', updateScrollSpy);

        // Initial call
        updateScrollSpy();

        // Add click handlers for navigation
        document.querySelectorAll('a[data-section]').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const section = link.getAttribute('data-section');
                const element = document.getElementById(section);
                if (element) {
                    element.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>

    @stack('scripts')
</body>
</html>
