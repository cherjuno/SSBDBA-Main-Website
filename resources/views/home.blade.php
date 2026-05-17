@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section id="hero" class="hero-section relative min-h-screen pt-20 pb-20 flex items-center overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-secondary-2 rounded-full opacity-10 blur-3xl -mr-48 -mt-48"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-accent rounded-full opacity-10 blur-3xl -ml-48 -mb-48"></div>
    
    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left: Text Content -->
            <div>
                <!-- Badge -->
                <div class="inline-block mb-6 animate-pulse">
                    <span class="badge bg-white bg-opacity-20 text-light backdrop-blur-sm border border-white border-opacity-30 px-4 py-2 rounded-full font-semibold text-sm">
                        🚀 Welcome to SSBDA Lab
                    </span>
                </div>

                <!-- Main Heading -->
                <h1 class="text-4xl md:text-5xl font-bold text-light mb-6 leading-tight fade-in">
                    Social Simulation <span class="text-accent">&</span> Big Data Analytics Laboratory
                </h1>

                <!-- Subtitle -->
                <p class="text-base md:text-lg text-secondary-3 mb-10 fade-in leading-relaxed">
                    Menggabungkan simulasi sosial dan analitik big data untuk memahami perilaku kolektif, kebijakan publik, dan pengambilan keputusan berbasis data.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 fade-in">
                    <a href="#about" class="group px-8 py-3 bg-light text-primary font-bold rounded-lg hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 inline-block text-center">
                        <span class="flex items-center justify-center gap-2">
                            Explore More
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </span>
                    </a>
                    <a href="#portfolio" class="group px-8 py-3 bg-accent text-light font-bold rounded-lg hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 inline-block text-center border-2 border-accent hover:border-secondary-3">
                        <span class="flex items-center justify-center gap-2">
                            View Projects
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>

            <!-- Right: Illustration -->
            <div class="hidden lg:flex items-center justify-center">
                <div class="relative">
                    <!-- Animated illustration card -->
                    <div class="bg-white bg-opacity-10 backdrop-blur-md rounded-2xl p-8 border border-white border-opacity-20 shadow-2xl transform hover:-translate-y-4 transition-all duration-300">
                        <div class="w-full h-64 bg-gradient-to-br from-secondary-2 to-accent rounded-xl flex items-center justify-center relative overflow-hidden group">
                            <!-- SVG Illustration -->
                            <svg class="w-full h-full p-8 text-light" fill="currentColor" viewBox="0 0 200 200">
                                <!-- Data visualization chart -->
                                <circle cx="50" cy="120" r="20" opacity="0.8"/>
                                <rect x="80" y="90" width="30" height="50" opacity="0.8"/>
                                <polygon points="150,60 180,120 120,120" opacity="0.8"/>
                                <circle cx="100" cy="60" r="30" opacity="0.6" fill="none" stroke="currentColor" stroke-width="2"/>
                                <circle cx="100" cy="60" r="40" opacity="0.4" fill="none" stroke="currentColor" stroke-width="2"/>
                            </svg>
                            <div class="absolute inset-0 bg-gradient-to-t from-accent to-transparent opacity-0 group-hover:opacity-20 transition-all duration-300"></div>
                        </div>
                        
                        <!-- Stats below illustration -->
                        <div class="mt-6 grid grid-cols-3 gap-4">
                            <div class="text-center">
                                <p class="text-2xl font-bold text-accent">15+</p>
                                <p class="text-xs text-white text-opacity-70">Researchers</p>
                            </div>
                            <div class="text-center">
                                <p class="text-2xl font-bold text-accent">50+</p>
                                <p class="text-xs text-white text-opacity-70">Papers</p>
                            </div>
                            <div class="text-center">
                                <p class="text-2xl font-bold text-accent">20+</p>
                                <p class="text-xs text-white text-opacity-70">Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="mt-16 flex justify-center animate-bounce">
            <svg class="w-6 h-6 text-secondary-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section id="about" class="section bg-light">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="section-header">About Us</h2>
            <p class="section-subtitle">Mengenal lebih jauh tentang visi, misi, dan fokus penelitian laboratorium kami.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left: Text Content -->
            <div class="fade-in">
                <h3 class="text-2xl font-bold text-primary mb-4">Visi & Misi</h3>
                <p class="text-secondary1 mb-4 leading-relaxed">
                    Laboratorium SSBDA berfokus pada penelitian dan pengembangan metode simulasi sosial dan analitik big data untuk memahami fenomena sosial kompleks, kebijakan publik, dan pengambilan keputusan berbasis data.
                </p>
                <p class="text-secondary1 mb-6 leading-relaxed">
                    Kami mengembangkan model agen, simulasi jaringan sosial, pemrosesan dataset besar, serta penerapan praktis pada bidang kebijakan publik, kesehatan masyarakat, dan transportasi cerdas. Kombinasi model teoretis, eksperimen berbasis data, dan visualisasi canggih menjadi inti kerja kami.
                </p>

                <div class="space-y-3">
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-accent flex items-center justify-center text-light flex-shrink-0 mt-1">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-primary">Social Simulation</h4>
                            <p class="text-sm text-secondary-2">Model agen dan simulasi berbasis interaksi sosial</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-accent flex items-center justify-center text-light flex-shrink-0 mt-1">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-primary">Big Data Analytics</h4>
                            <p class="text-sm text-secondary-2">Pemrosesan dan analisis dataset besar untuk insights</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-accent flex items-center justify-center text-light flex-shrink-0 mt-1">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-primary">Applied Research</h4>
                            <p class="text-sm text-secondary-2">Penerapan pada kebijakan, kesehatan, dan transportasi</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Visual Content -->
            <div class="fade-in">
                <div class="bg-gradient-to-br from-secondary-3 to-secondary-2 rounded-2xl p-8 shadow-lg">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-light rounded-lg p-6 text-center">
                            <p class="text-3xl font-bold text-accent mb-2">15+</p>
                            <p class="text-sm text-secondary1 font-medium">Active Researchers</p>
                        </div>
                        <div class="bg-light rounded-lg p-6 text-center">
                            <p class="text-3xl font-bold text-accent mb-2">50+</p>
                            <p class="text-sm text-secondary1 font-medium">Research Papers</p>
                        </div>
                        <div class="bg-light rounded-lg p-6 text-center">
                            <p class="text-3xl font-bold text-accent mb-2">20+</p>
                            <p class="text-sm text-secondary1 font-medium">Completed Projects</p>
                        </div>
                        <div class="bg-light rounded-lg p-6 text-center">
                            <p class="text-3xl font-bold text-accent mb-2">8+</p>
                            <p class="text-sm text-secondary1 font-medium">Years of Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Team Section -->
<section id="team" class="section bg-gradient-to-br from-secondary-3 via-light to-secondary-3">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="section-header">Our Talented Team</h2>
            <p class="section-subtitle">Tim profesional dengan dedikasi tinggi dalam penelitian sosial simulasi dan analitik big data.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="team-card overflow-hidden">
                <div class="h-56 bg-gradient-to-br from-primary to-secondary1 flex items-center justify-center">
                    <svg class="w-24 h-24 text-secondary3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-primary mb-1">Prof. Dr.Eng. Pri Hermawan, S.T., M.T.
</h3>
                    <p class="text-accent font-semibold mb-3">Head of Laboratory</p>
                    <p class="text-secondary-1 text-sm mb-4">Decision Making and Strategic Negotiation (DMSN).</p>
                    <div class="flex justify-center gap-3">
                        <span class="inline-block px-3 py-1 bg-light text-primary text-xs font-semibold rounded-full">Negotiation</span>
                        <span class="inline-block px-3 py-1 bg-light text-primary text-xs font-semibold rounded-full">Confrontation Analysis</span>
                    </div>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="team-card overflow-hidden">
                <div class="h-56 bg-gradient-to-br from-secondary2 to-secondary1 flex items-center justify-center">
                    <svg class="w-24 h-24 text-light" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-primary mb-1">Shimaditya Nuraeni</h3>
                    
                    <p class="text-secondary-1 text-sm mb-4">Decision Making and Strategic Negotiation (DMSN)</p>
                    <div class="flex justify-center gap-3">
                        <span class="inline-block px-3 py-1 bg-light text-primary text-xs font-semibold rounded-full">Behavioral Decision Making</span>
                        <span class="inline-block px-3 py-1 bg-light text-primary text-xs font-semibold rounded-full"> Work-Life Studies</span>
                    </div>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="team-card overflow-hidden">
                <div class="h-56 bg-gradient-to-br from-accent to-primary flex items-center justify-center">
                    <svg class="w-24 h-24 text-light" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-primary mb-1">Mr CT</h3>
                    <p class="text-accent font-semibold mb-3"></p>
                    <p class="text-secondary-1 text-sm mb-4">Berpengalaman dalam data engineering, infrastructure, dan development tools untuk penelitian.</p>
                    <div class="flex justify-center gap-3">
                        <span class="inline-block px-3 py-1 bg-light text-primary text-xs font-semibold rounded-full">Engineering</span>
                        <span class="inline-block px-3 py-1 bg-light text-primary text-xs font-semibold rounded-full">DevOps</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="section bg-light">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="section-header">Our Projects</h2>
            <p class="section-subtitle">Koleksi proyek penelitian dan aplikasi terapan yang menunjukkan keahlian laboratorium kami.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Project 1 -->
            <div class="portfolio-card overflow-hidden bg-white border-l-4 border-primary">
                <div class="h-48 bg-gradient-to-br from-primary to-secondary-1 flex items-center justify-center text-light">
                    <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-primary mb-2">Social Network Simulation</h3>
                    <p class="text-secondary-1 text-sm mb-4">Simulasi dinamika jaringan sosial untuk memprediksi penyebaran informasi dan influenza sosial.</p>
                    <div class="flex gap-2">
                        <span class="inline-block px-2 py-1 bg-secondary-3 text-primary text-xs rounded font-medium">Simulation</span>
                        <span class="inline-block px-2 py-1 bg-secondary-3 text-primary text-xs rounded font-medium">Networks</span>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="portfolio-card overflow-hidden bg-white border-l-4 border-accent">
                <div class="h-48 bg-gradient-to-br from-secondary-2 to-secondary-1 flex items-center justify-center text-light">
                    <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-primary mb-2">Traffic Flow Analytics</h3>
                    <p class="text-secondary-1 text-sm mb-4">Analisis big data dari sensor transportasi untuk optimalisasi aliran lalu lintas perkotaan.</p>
                    <div class="flex gap-2">
                        <span class="inline-block px-2 py-1 bg-secondary-3 text-primary text-xs rounded font-medium">Analytics</span>
                        <span class="inline-block px-2 py-1 bg-secondary-3 text-primary text-xs rounded font-medium">Transportation</span>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="portfolio-card overflow-hidden bg-white border-l-4 border-secondary-2">
                <div class="h-48 bg-gradient-to-br from-accent to-primary flex items-center justify-center text-light">
                    <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 1 1 0 000-2 4 4 0 00-4 4v10a4 4 0 004 4h8a4 4 0 004-4V5a1 1 0 000 2 2 2 0 012 2v10a6 6 0 01-6 6H6a6 6 0 01-6-6V5z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-primary mb-2">Public Health Modeling</h3>
                    <p class="text-secondary-1 text-sm mb-4">Model epidemiologi berbasis agen untuk simulasi penyebaran penyakit dan strategi intervensi.</p>
                    <div class="flex gap-2">
                        <span class="inline-block px-2 py-1 bg-secondary-3 text-primary text-xs rounded font-medium">Modeling</span>
                        <span class="inline-block px-2 py-1 bg-secondary-3 text-primary text-xs rounded font-medium">Health</span>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="portfolio-card overflow-hidden bg-white border-l-4 border-secondary-1">
                <div class="h-48 bg-gradient-to-br from-primary to-secondary-2 flex items-center justify-center text-light">
                    <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 6H6.28l-.31-1.243A1 1 0 005 4H3z"/>
                        <path d="M5 16a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM14 16a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-primary mb-2">Consumer Behavior Analysis</h3>
                    <p class="text-secondary-1 text-sm mb-4">Analisis perilaku konsumen dari transaksi e-commerce untuk prediksi trend dan rekomendasi.</p>
                    <div class="flex gap-2">
                        <span class="inline-block px-2 py-1 bg-secondary-3 text-primary text-xs rounded font-medium">Analytics</span>
                        <span class="inline-block px-2 py-1 bg-secondary-3 text-primary text-xs rounded font-medium">Behavior</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section bg-gradient-to-r from-primary to-secondary-1 text-light">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Tertarik Berkolaborasi?</h2>
        <p class="text-lg text-secondary-3 mb-8">Hubungi kami untuk diskusi tentang proyek penelitian, kolaborasi, atau pertanyaan lainnya.</p>
        <a href="mailto:lab@ssbda.com" class="inline-block px-10 py-4 bg-accent text-light font-bold rounded-lg hover:shadow-2xl transition-all duration-300">
            Get In Touch
        </a>
    </div>
</section>

@endsection
