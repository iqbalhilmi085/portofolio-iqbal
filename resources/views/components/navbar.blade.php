<nav class="fixed top-0 z-50 w-full bg-white/80 backdrop-blur-md border-b border-gray-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 h-16 flex items-center justify-between">
        <a href="#home" class="text-xl font-bold text-indigo-600 hover:text-indigo-700 transition">{{ $profile['name'] }}</a>
        <div class="hidden md:flex items-center gap-8 text-sm font-medium">
            <a href="#home" class="hover:text-indigo-600 transition">Beranda</a>
            <a href="#about" class="hover:text-indigo-600 transition">Tentang</a>
            <a href="#skills" class="hover:text-indigo-600 transition">Skill</a>
            <a href="#projects" class="hover:text-indigo-600 transition">Proyek</a>
            <a href="#contact" class="hover:text-indigo-600 transition">Kontak</a>
        </div>
        <button id="menu-toggle" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition" aria-label="Toggle menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>
    <div id="mobile-menu" class="hidden md:hidden border-t border-gray-100 bg-white/95 backdrop-blur-md px-4 py-4 text-sm font-medium space-y-3">
        <a href="#home" class="block hover:text-indigo-600 transition">Beranda</a>
        <a href="#about" class="block hover:text-indigo-600 transition">Tentang</a>
        <a href="#skills" class="block hover:text-indigo-600 transition">Skill</a>
        <a href="#projects" class="block hover:text-indigo-600 transition">Proyek</a>
        <a href="#contact" class="block hover:text-indigo-600 transition">Kontak</a>
    </div>
</nav>
