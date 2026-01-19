<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yayasan Matauli</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans">
    <!-- Navbar -->
    <nav class="bg-[#1e3a8a] fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="/" class="flex items-center">
                        <img src="{{ asset('images/logo.png') }}" alt="Yayasan Matauli" class="h-16 w-auto">
                    </a>
                </div>

                <!-- Navigation Menu -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-8">
                        <a href="#beranda" class="text-white hover:text-gray-200 transition duration-300">
                            Beranda
                        </a>
                        
                        <!-- Dropdown Tentang Kami -->
                        <div class="relative group">
                            <button class="text-white hover:text-gray-200 transition duration-300 flex items-center">
                                Tentang Kami
                                <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                                <a href="#visi-misi" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Visi & Misi</a>
                                <a href="#sejarah" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Sejarah</a>
                                <a href="#struktur" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Struktur Organisasi</a>
                            </div>
                        </div>

                        <!-- Dropdown Satuan Pendidikan -->
                        <div class="relative group">
                            <button class="text-white hover:text-gray-200 transition duration-300 flex items-center">
                                Satuan Pendidikan
                                <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                                <a href="#universitas" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Universitas</a>
                                <a href="#sekolah" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Sekolah</a>
                            </div>
                        </div>

                        <!-- Dropdown Berita -->
                        <div class="relative group">
                            <button class="text-white hover:text-gray-200 transition duration-300 flex items-center">
                                Berita
                                <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                                <a href="#berita-terbaru" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Berita Terbaru</a>
                                <a href="#pengumuman" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Pengumuman</a>
                            </div>
                        </div>

                        <a href="#kontak" class="text-white hover:text-gray-200 transition duration-300">
                            Kontak
                        </a>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-white hover:text-gray-200">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-[#1e3a8a]">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#beranda" class="block px-3 py-2 text-white hover:bg-[#2d4a9a]">Beranda</a>
                <a href="#tentang" class="block px-3 py-2 text-white hover:bg-[#2d4a9a]">Tentang Kami</a>
                <a href="#pendidikan" class="block px-3 py-2 text-white hover:bg-[#2d4a9a]">Satuan Pendidikan</a>
                <a href="#berita" class="block px-3 py-2 text-white hover:bg-[#2d4a9a]">Berita</a>
                <a href="#kontak" class="block px-3 py-2 text-white hover:bg-[#2d4a9a]">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-[#0f1f4a] via-[#1e3a8a] to-[#2d4a9a] pt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="text-white">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                        MATAULI YANG TANGGUH DAN BERINTEGRITAS
                    </h1>
                    <p class="text-lg md:text-xl mb-8 text-gray-200 leading-relaxed">
                        Yayasan yang memiliki prinsip teguh serta memegang nilai-nilai keberagaman, integritas, profesionalisme dan budaya unggul
                    </p>
                    <a href="#info" class="inline-block bg-[#f59e0b] hover:bg-[#d97706] text-white font-semibold px-8 py-4 rounded-lg transition duration-300 shadow-lg hover:shadow-xl">
                        Informasi lebih tentang kami
                    </a>
                </div>

                <!-- Right Content - Team Image -->
                <div class="relative">
                    <img src="{{ asset('images/team.png') }}" alt="Tim Yayasan Matauli" class="w-full rounded-lg shadow-2xl">
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="bg-[#0a1628] py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Feature 1 -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="bg-[#f59e0b] p-3 rounded-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold text-lg mb-2">Solid, berkualitas dan profesional</h3>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="bg-[#f59e0b] p-3 rounded-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM14 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-3zM14 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1h-4a1 1 0 01-1-1v-3z"/>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold text-lg mb-2">Mandiri menuju harapan baru</h3>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="bg-[#f59e0b] p-3 rounded-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold text-lg mb-2">Komitmen untuk kemajuan bangsa</h3>
                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="bg-[#f59e0b] p-3 rounded-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold text-lg mb-2">Berorientasi untuk pendidikan</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>