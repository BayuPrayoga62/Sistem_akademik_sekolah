<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yayasan Fityanul Ulum - Pesantren Modern</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.55;
            }
        }

        .animate-pulse-custom {
            animation: pulse 5s ease-in-out infinite;
        }

        .bg-hero {
            background: radial-gradient(circle at top left, rgba(5, 150, 105, 0.18), transparent 28%),
                radial-gradient(circle at bottom right, rgba(4, 120, 87, 0.18), transparent 24%),
                linear-gradient(135deg, #064e3b 0%, #0f766e 40%, #059669 100%);
        }

        .brand-gradient {
            background: linear-gradient(135deg, #059669 0%, #047857 50%, #065f46 100%);
        }

        .section-divider {
            height: 3px;
            width: 80px;
            border-radius: 9999px;
            background: linear-gradient(90deg, #34d399, #059669);
        }

        .text-balance {
            text-wrap: balance;
        }

        .text-pretty {
            text-wrap: pretty;
        }
    </style>
</head>

<body class="font-sans">
    <!-- NAVBAR -->
    <nav id="navbar" class="fixed top-0 w-full z-50 transition-all duration-300 bg-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div id="logo" class="flex-shrink-0 font-bold text-lg tracking-tight text-white">
                    Yayasan Fityanul Ulum
                </div>

                <!-- Desktop Menu -->
                <div id="desktop-menu" class="hidden md:flex gap-8">
                    <a href="#home"
                        class="text-sm font-medium transition-colors text-white hover:text-emerald-200">Beranda</a>
                    <a href="#about"
                        class="text-sm font-medium transition-colors text-white hover:text-emerald-200">Tentang</a>
                    <a href="#programs"
                        class="text-sm font-medium transition-colors text-white hover:text-emerald-200">Mapel</a>
                    <a href="#gallery"
                        class="text-sm font-medium transition-colors text-white hover:text-emerald-200">Galeri</a>
                    <a href="#contact"
                        class="text-sm font-medium transition-colors text-white hover:text-emerald-200">Kontak</a>
                </div>

                <!-- Login Button and Mobile Menu -->
                <div class="flex items-center gap-4">
                    <a href="{{ route('login') }}"
                        class="px-6 py-2 rounded-lg font-semibold text-sm transition-all duration-200 bg-emerald-600 text-white hover:bg-emerald-700 shadow-md hover:shadow-lg">
                        LOGIN
                    </a>

                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-btn" class="md:hidden">
                        <svg id="menu-icon" class="text-white" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden pb-4 hidden bg-slate-950/95">
                <a href="#home"
                    class="block px-4 py-2 rounded-md text-sm font-medium transition-colors text-white hover:bg-emerald-600/90">Beranda</a>
                <a href="#about"
                    class="block px-4 py-2 rounded-md text-sm font-medium transition-colors text-white hover:bg-emerald-600/90">Tentang</a>
                <a href="#programs"
                    class="block px-4 py-2 rounded-md text-sm font-medium transition-colors text-white hover:bg-emerald-600/90">Mapel</a>
                <a href="#gallery"
                    class="block px-4 py-2 rounded-md text-sm font-medium transition-colors text-white hover:bg-emerald-600/90">Galeri</a>
                <a href="#contact"
                    class="block px-4 py-2 rounded-md text-sm font-medium transition-colors text-white hover:bg-emerald-600/90">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section id="home" class="min-h-screen pt-24 pb-12 bg-hero relative overflow-hidden">
        <div class="absolute inset-x-0 top-10 h-72 bg-cyan-500/10 blur-3xl"></div>
        <div class="absolute inset-y-0 right-0 w-1/2 bg-slate-950/10 blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div class="space-y-8 text-white max-w-2xl">
                    <span
                        class="inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-2 text-sm font-semibold text-sky-100 ring-1 ring-white/15">
                        <span class="h-2.5 w-2.5 rounded-full bg-cyan-300"></span>
                        Pesantren Modern &amp; Akademik
                    </span>
                    <div class="space-y-5">
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight tracking-tight">
                            Membangun Santri yang Cerdas, Berbudi, dan Siap Bersinar
                        </h1>
                        <p class="text-lg sm:text-xl text-slate-200 leading-relaxed">
                            Yayasan Fityanul Ulum menggabungkan pendidikan agama, sains, dan karakter untuk
                            menghasilkan generasi unggul yang peduli kepada ilmu dan bangsa.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#programs"
                            class="inline-flex items-center justify-center rounded-3xl bg-emerald-600 px-8 py-3 text-base font-semibold text-white shadow-xl shadow-emerald-600/20 transition duration-300 hover:-translate-y-0.5 hover:bg-emerald-700">
                            Lihat Mapel
                        </a>
                        <a href="#about"
                            class="inline-flex items-center justify-center rounded-3xl border border-emerald-300/40 bg-emerald-50/20 px-8 py-3 text-base font-semibold text-white transition duration-300 hover:bg-emerald-600/20">
                            Tentang Kami
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6">
                    <div class="rounded-[2rem] overflow-hidden shadow-2xl ring-1 ring-white/10">
                        <img src="{{ asset('img/foto_1.jpeg') }}" alt="Foto kegiatan pesantren"
                            class="w-full h-full object-cover min-h-[420px]" />
                    </div>
                    <div
                        class="rounded-[2rem] bg-slate-950/85 p-8 shadow-2xl ring-1 ring-white/10 flex flex-col justify-between text-white">
                        <div>
                            <p class="text-sm uppercase tracking-[0.3em] text-cyan-200">Visi dan Misi</p>
                            <h2 class="mt-3 text-2xl font-semibold">Menjadikan Santri Berilmu dan Berakhlak</h2>
                            <p class="mt-4 text-sm leading-relaxed text-slate-300">
                                Mencetak generasi yang unggul dalam nilai agama, prestasi akademik, dan jiwa
                                kepemimpinan.
                            </p>
                        </div>
                        <div class="mt-6 inline-flex items-center gap-2 text-sm text-slate-300">
                            <span
                                class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-cyan-300/20 text-cyan-200">✓</span>
                            Kurikulum modern & proses pembelajaran aktif
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="py-16 sm:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="space-y-6">
                    <div class="space-y-3">
                        <p class="text-sm font-semibold text-emerald-600 uppercase tracking-widest">Tentang Kami</p>
                        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 text-balance">
                            Yayasan Fityanul Ulum
                        </h2>
                    </div>

                    <p class="text-lg text-gray-600 leading-relaxed">
                        Yayasan Fityanul Ulum adalah pesantren modern yang berkomitmen memberikan pendidikan berkualitas
                        tinggi dengan menggabungkan ilmu agama Islam dan pendidikan umum. Kami memiliki kurikulum
                        komprehensif yang dirancang untuk menghasilkan santri yang berpengetahuan luas, berakhlak mulia,
                        dan siap menghadapi tantangan zaman.
                    </p>

                    <div class="space-y-4 pt-4">
                        <!-- Feature 1 -->
                        <div class="flex gap-4">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-xl bg-emerald-600">
                                    <span class="text-white text-xl">✓</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Pendidikan Islam Berkualitas</h3>
                                <p class="text-gray-600">Pembelajaran Al-Quran, Hadis, Fiqih, dan ilmu-ilmu keislaman
                                    lainnya</p>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="flex gap-4">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-xl bg-emerald-600">
                                    <span class="text-white text-xl">✓</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Pendidikan Umum Lengkap</h3>
                                <p class="text-gray-600">Kurikulum nasional dengan mata pelajaran akademik yang
                                    komprehensif</p>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="flex gap-4">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-xl bg-emerald-600">
                                    <span class="text-white text-xl">✓</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Pembinaan Akhlak dan Karakter</h3>
                                <p class="text-gray-600">Pengembangan kepribadian yang baik melalui pembinaan akhlak
                                    mulia</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image/Illustration -->
                <div class="hidden lg:flex items-center justify-center">
                    <div class="w-full max-w-md overflow-hidden rounded-[2rem] shadow-2xl ring-1 ring-slate-900/10">
                        <img src="{{ asset('img/foto_2.jpeg') }}" alt="Foto pesantren"
                            class="w-full h-full object-cover aspect-[4/5]" />
                    </div>
                </div>
            </div>
    </section>

    <!-- FEATURES SECTION -->
    <section id="programs" class="py-16 sm:py-24 bg-gradient-to-br from-emerald-50 to-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center space-y-4 mb-16">
                <p class="text-sm font-semibold text-emerald-600 uppercase tracking-widest">Kurikulum Kami</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 text-balance">
                    Mata Pelajaran Pesantren Fityanul Ulum
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Kombinasi sempurna antara ilmu agama Islam dan pendidikan umum yang berkualitas
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature Card 1 -->
                <div
                    class="group bg-white rounded-xl p-8 shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-emerald-200">
                    <div
                        class="w-14 h-14 rounded-lg bg-gradient-to-br from-emerald-600 to-emerald-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-white text-2xl">📖</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Al-Quran dan Hadis</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Pembelajaran mendalam tentang Al-Quran, Tafsir, dan Hadis Nabi Muhammad SAW
                    </p>
                    <div
                        class="mt-6 pt-6 border-t border-gray-100 group-hover:border-emerald-200 transition-colors duration-300">
                    </div>
                </div>

                <!-- Feature Card 2 -->
                <div
                    class="group bg-white rounded-xl p-8 shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-emerald-200">
                    <div
                        class="w-14 h-14 rounded-lg bg-gradient-to-br from-emerald-600 to-emerald-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-white text-2xl">⚖️</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Fiqih dan Ushul Fiqih</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Studi hukum Islam dan metodologi penetapan hukum berdasarkan Al-Quran dan Sunnah
                    </p>
                    <div
                        class="mt-6 pt-6 border-t border-gray-100 group-hover:border-emerald-200 transition-colors duration-300">
                    </div>
                </div>

                <!-- Feature Card 3 -->
                <div
                    class="group bg-white rounded-xl p-8 shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-emerald-200">
                    <div
                        class="w-14 h-14 rounded-lg bg-gradient-to-br from-emerald-600 to-emerald-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-white text-2xl">🌍</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Bahasa Arab</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Penguasaan bahasa Arab untuk memahami teks-teks Islam dan komunikasi sehari-hari
                    </p>
                    <div
                        class="mt-6 pt-6 border-t border-gray-100 group-hover:border-emerald-200 transition-colors duration-300">
                    </div>
                </div>

                <!-- Feature Card 4 -->
                <div
                    class="group bg-white rounded-xl p-8 shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-emerald-200">
                    <div
                        class="w-14 h-14 rounded-lg bg-gradient-to-br from-emerald-600 to-emerald-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-white text-2xl">🔢</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Matematika</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Pembelajaran matematika tingkat menengah dengan pendekatan yang sistematis dan terukur
                    </p>
                    <div
                        class="mt-6 pt-6 border-t border-gray-100 group-hover:border-emerald-200 transition-colors duration-300">
                    </div>
                </div>

                <!-- Feature Card 5 -->
                <div
                    class="group bg-white rounded-xl p-8 shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-emerald-200">
                    <div
                        class="w-14 h-14 rounded-lg bg-gradient-to-br from-emerald-600 to-emerald-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-white text-2xl">🗣️</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Bahasa Indonesia dan Inggris</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Penguasaan bahasa Indonesia dan Inggris untuk komunikasi lokal dan internasional
                    </p>
                    <div
                        class="mt-6 pt-6 border-t border-gray-100 group-hover:border-emerald-200 transition-colors duration-300">
                    </div>
                </div>

                <!-- Feature Card 6 -->
                <div
                    class="group bg-white rounded-xl p-8 shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-emerald-200">
                    <div
                        class="w-14 h-14 rounded-lg bg-gradient-to-br from-emerald-600 to-emerald-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-white text-2xl">🔬</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Sains dan Teknologi</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Pembelajaran IPA, Biologi, Fisika, dan Kimia serta pengenalan teknologi modern
                    </p>
                    <div
                        class="mt-6 pt-6 border-t border-gray-100 group-hover:border-emerald-200 transition-colors duration-300">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY SECTION -->
    <section id="gallery" class="py-16 sm:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center space-y-4 mb-16">
                <p class="text-sm font-semibold text-emerald-600 uppercase tracking-widest">Galeri</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 text-balance">
                    Dokumentasi Sekolah
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Lihat momen-momen berharga dari aktivitas akademik dan ekstrakurikuler
                </p>
            </div>

            <!-- Gallery Grid -->
            @php
                $galleryImages = [
                    'foto_3.jpeg',
                    'foto_4.jpeg',
                    'foto_5.jpeg',
                    'foto_6.jpeg',
                    'foto_7.jpeg',
                    'foto_8.jpeg',
                ];
            @endphp
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                @foreach ($galleryImages as $index => $image)
                    <div
                        class="group relative overflow-hidden rounded-[2rem] shadow-2xl border border-slate-200/50 bg-slate-950/5">
                        <img src="{{ asset('img/' . $image) }}" alt="Foto galeri {{ $index + 3 }}"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-950/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-5">
                            <p class="text-sm uppercase tracking-[0.24em] text-cyan-100">Dokumentasi</p>
                            <p class="text-lg font-semibold text-white">Foto {{ $index + 3 }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="py-16 sm:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center space-y-4 mb-16">
                <p class="text-sm font-semibold text-emerald-600 uppercase tracking-widest">Hubungi Kami</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 text-balance">
                    Kami Siap Membantu
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Hubungi kami untuk informasi lebih lanjut tentang sistem akademik kami
                </p>
            </div>

            <div class="rounded-[2rem] bg-white p-8 shadow-2xl ring-1 ring-slate-200/70">
                <div class="grid grid-cols-1 gap-12 lg:grid-cols-[1.4fr_1fr]">
                    <div class="space-y-8">
                        <!-- Address -->
                        <div class="flex gap-4">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-emerald-600">
                                    <span class="text-white text-xl">📍</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Alamat</h3>
                                <p class="text-gray-600">
                                    Jalan Sengon No. 18 B, RT.01/RW.03,<br>
                                    Cinere, Kec. Cinere, Kota Depok, Jawa Barat 16514<br>
                                    Indonesia
                                </p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex gap-4">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-emerald-500">
                                    <span class="text-white text-xl">✉️</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Email</h3>
                                <a href="mailto:fityanululum01@gmail.com"
                                    class="text-emerald-600 hover:text-emerald-700 font-medium">
                                    fityanululum01@gmail.com
                                </a>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex gap-4">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-emerald-500">
                                    <span class="text-white text-xl">☎️</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Telepon & WhatsApp</h3>
                                <a href="tel:+62215551234"
                                    class="text-gray-600 hover:text-gray-900 font-medium block mb-2">
                                    +62 (21) 555-1234
                                </a>
                                <a href="https://wa.me/6281234567890" target="_blank"
                                    class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-emerald-600 text-white font-semibold hover:bg-emerald-700 transition-colors">
                                    💬 WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-center rounded-[1.5rem] bg-emerald-50 p-8">
                        <div class="space-y-4 text-center">
                            <p class="text-sm font-semibold text-emerald-600 uppercase tracking-[0.3em]">Support Center
                            </p>
                            <h3 class="text-2xl font-bold text-gray-900">Siap membantu kapan saja</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Tim kami selalu siap menjawab pertanyaan dan membantu akses data akademik lebih cepat.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 border-t border-emerald-200 pt-8">
                    <div class="flex flex-col gap-3 sm:flex-row sm:justify-between sm:items-center">
                        <p class="text-sm text-slate-500">
                            © 2026 Sistem Akademik Sekolah. All rights reserved.
                        </p>
                        <p class="text-sm text-slate-500">
                            Created by : Bayu Prayoga, Muh Gunawan Hadi, & Izmi Fatimach.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Navbar scroll effect
            const navbar = document.getElementById('navbar');
            const logo = document.getElementById('logo');
            const desktopMenu = document.getElementById('desktop-menu');
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            window.addEventListener('scroll', () => {
                const isScrolled = window.scrollY > 0;

                if (isScrolled) {
                    navbar.classList.add('bg-white', 'shadow-lg');
                    navbar.classList.remove('bg-transparent');
                    logo.classList.add('text-blue-900');
                    logo.classList.remove('text-white');

                    // Update menu colors
                    desktopMenu.querySelectorAll('a').forEach(link => {
                        link.classList.add('text-gray-700', 'hover:text-emerald-600');
                        link.classList.remove('text-white', 'hover:text-blue-200');
                    });
                } else {
                    navbar.classList.remove('bg-white', 'shadow-lg');
                    navbar.classList.add('bg-transparent');
                    logo.classList.remove('text-blue-900');
                    logo.classList.add('text-white');

                    // Revert menu colors
                    desktopMenu.querySelectorAll('a').forEach(link => {
                        link.classList.remove('text-gray-700', 'hover:text-emerald-600');
                        link.classList.add('text-white', 'hover:text-blue-200');
                    });
                }
            });

            // Mobile menu toggle
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // Close mobile menu when clicking on a link
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            });

            // Smooth scroll
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        </script>
</body>

</html>
