<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Iqbal',
            'title' => 'Full-Stack Web Developer',
            'tagline' => 'Membangun solusi digital modern yang fungsional, cepat, dan user-friendly. Berbasis di Indonesia, siap membantu mewujudkan ide Anda.',
            'about' => 'Saya Iqbal, seorang Full-Stack Web Developer dengan pengalaman dalam membangun aplikasi web menggunakan Laravel, PHP, JavaScript, dan Tailwind CSS. Saya fokus pada pengembangan backend yang solid serta frontend yang responsif dan menarik. Dengan prinsip kerja yang rapi dan terstruktur, saya selalu berusaha memberikan hasil terbaik dalam setiap proyek.',
            'photo' => null,
            'stats' => [
                'projects' => 12,
                'experience' => 3,
                'clients' => 8,
            ],
            'social' => [
                'github' => 'https://github.com/iqbal',
                'linkedin' => 'https://linkedin.com/in/iqbal',
                'instagram' => 'https://instagram.com/iqbal',
                'email' => 'iqbal@example.com',
            ],
        ];

        $skills = [
            ['name' => 'PHP', 'category' => 'Backend', 'icon' => '🐘'],
            ['name' => 'Laravel', 'category' => 'Backend', 'icon' => '⚡'],
            ['name' => 'JavaScript', 'category' => 'Frontend', 'icon' => '🟨'],
            ['name' => 'Vue.js', 'category' => 'Frontend', 'icon' => '🟩'],
            ['name' => 'Tailwind CSS', 'category' => 'Frontend', 'icon' => '🎨'],
            ['name' => 'Bootstrap', 'category' => 'Frontend', 'icon' => '💎'],
            ['name' => 'MySQL', 'category' => 'Database', 'icon' => '🗄️'],
            ['name' => 'Git', 'category' => 'Tools', 'icon' => '🔀'],
            ['name' => 'Docker', 'category' => 'Tools', 'icon' => '🐳'],
            ['name' => 'REST API', 'category' => 'Backend', 'icon' => '🔗'],
        ];

        $projects = [
            [
                'id' => 1,
                'title' => 'Sistem Manajemen Inventaris',
                'description' => 'Aplikasi web full-stack untuk mengelola stok barang, supplier, dan laporan inventaris secara real-time.',
                'tech_stack' => ['Laravel', 'Vue.js', 'MySQL', 'Tailwind CSS'],
                'github_url' => 'https://github.com/iqbal/inventory',
                'live_url' => '#',
            ],
            [
                'id' => 2,
                'title' => 'Website E-Commerce',
                'description' => 'Platform belanja online dengan fitur keranjang belanja, pembayaran midtrans, dan dashboard admin.',
                'tech_stack' => ['Laravel', 'Livewire', 'Alpine.js', 'Tailwind CSS'],
                'github_url' => 'https://github.com/iqbal/ecommerce',
                'live_url' => '#',
            ],
            [
                'id' => 3,
                'title' => 'Aplikasi Absensi Digital',
                'description' => 'Sistem absensi berbasis web dengan fitur QR code, geolokasi, dan laporan kehadiran.',
                'tech_stack' => ['Laravel', 'React', 'MySQL', 'Bootstrap'],
                'github_url' => 'https://github.com/iqbal/absensi',
                'live_url' => '#',
            ],
            [
                'id' => 4,
                'title' => 'Portfolio Website',
                'description' => 'Website portofolio pribadi modern dengan Tailwind CSS v4, responsive, dan performa cepat.',
                'tech_stack' => ['Laravel', 'Tailwind CSS', 'Blade', 'MySQL'],
                'github_url' => 'https://github.com/iqbal/portfolio',
                'live_url' => '#',
            ],
            [
                'id' => 5,
                'title' => 'API Restful Blog',
                'description' => 'Backend API untuk platform blog dengan autentikasi JWT, dokumentasi Swagger, dan testing.',
                'tech_stack' => ['Laravel', 'PostgreSQL', 'Docker', 'Swagger'],
                'github_url' => 'https://github.com/iqbal/blog-api',
                'live_url' => '#',
            ],
            [
                'id' => 6,
                'title' => 'Dashboard Analytics',
                'description' => 'Dashboard interaktif untuk visualisasi data penjualan dengan grafik dinamis dan filter.',
                'tech_stack' => ['Laravel', 'Vue.js', 'Chart.js', 'Tailwind CSS'],
                'github_url' => 'https://github.com/iqbal/dashboard',
                'live_url' => '#',
            ],
        ];

        return view('portfolio.index', compact('profile', 'skills', 'projects'));
    }
}
