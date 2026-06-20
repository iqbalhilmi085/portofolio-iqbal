<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Iqbal Hilmi',
            'title' => 'Full-Stack Web Developer',
            'tagline' => 'Membangun solusi digital modern yang fungsional, cepat, dan user-friendly. Berbasis di Indonesia, siap membantu mewujudkan ide Anda.',
            'about' => 'Saya Iqbal Hilmi, seorang Full-Stack Web Developer dengan pengalaman dalam membangun aplikasi web menggunakan Laravel, PHP, JavaScript, dan Tailwind CSS. Saya fokus pada pengembangan backend yang solid serta frontend yang responsif dan menarik. Dengan prinsip kerja yang rapi dan terstruktur, saya selalu berusaha memberikan hasil terbaik dalam setiap proyek.',
            'photo' => \Illuminate\Support\Facades\Storage::url('photos/profile.jpg'),
            'stats' => [
                'projects' => 6,
                'experience' => 1,
                'clients' => 3,
            ],
            'social' => [
                'github' => 'https://github.com/iqbalhilmi085',
                'linkedin' => 'https://linkedin.com/in/iqbal-hilmi',
                'instagram' => 'https://www.instagram.com/miqbalhil',
                'email' => 'iqbalhilmi@example.com',
            ],
        ];

        $skills = [
            ['name' => 'PHP', 'category' => 'Backend', 'icon' => '🐘'],
            ['name' => 'Laravel', 'category' => 'Backend', 'icon' => '⚡'],
            ['name' => 'JavaScript', 'category' => 'Frontend', 'icon' => '🟨'],
            ['name' => 'Tailwind CSS', 'category' => 'Frontend', 'icon' => '🎨'],
            ['name' => 'Bootstrap', 'category' => 'Frontend', 'icon' => '💎'],
            ['name' => 'HTML & CSS', 'category' => 'Frontend', 'icon' => '🌐'],
            ['name' => 'MySQL', 'category' => 'Database', 'icon' => '🗄️'],
            ['name' => 'Git & GitHub', 'category' => 'Tools', 'icon' => '🔀'],
            ['name' => 'Java', 'category' => 'Bahasa', 'icon' => '☕'],
            ['name' => 'Flutter', 'category' => 'Mobile', 'icon' => '📱'],
        ];

        $projects = [
            [
                'id' => 1,
                'title' => 'WebSekolah',
                'description' => 'Sistem informasi sekolah berbasis web dengan Laravel. Mengelola data siswa, guru, kelas, jadwal, dan nilai secara terintegrasi.',
                'tech_stack' => ['Laravel', 'Tailwind CSS', 'SQLite', 'Blade'],
                'github_url' => 'https://github.com/iqbalhilmi085/WebSekolah',
                'live_url' => '#',
            ],
            [
                'id' => 2,
                'title' => 'PemWeb - Hello HTML',
                'description' => 'Proyek pemrograman web sederhana menggunakan HTML, CSS dasar, dan Bootstrap untuk membangun tampilan halaman web responsif.',
                'tech_stack' => ['HTML', 'CSS', 'Bootstrap'],
                'github_url' => 'https://github.com/iqbalhilmi085/pemweb',
                'live_url' => '#',
            ],
            [
                'id' => 3,
                'title' => 'Iqbul - Login System',
                'description' => 'Aplikasi PHP sederhana dengan sistem autentikasi login/logout dan dashboard untuk manajemen pengguna.',
                'tech_stack' => ['PHP', 'HTML', 'CSS'],
                'github_url' => 'https://github.com/iqbalhilmi085/iqbul',
                'live_url' => '#',
            ],
            [
                'id' => 4,
                'title' => 'Portfolio Website',
                'description' => 'Website portofolio pribadi modern dengan Laravel, Tailwind CSS v4, desain responsif, dan performa cepat.',
                'tech_stack' => ['Laravel', 'Tailwind CSS', 'Blade', 'MySQL'],
                'github_url' => 'https://github.com/iqbalhilmi085/portofolio-iqbal',
                'live_url' => '#',
            ],
            [
                'id' => 5,
                'title' => 'HTML Bootstrap',
                'description' => 'Eksperimen dan pembelajaran komponen Bootstrap untuk membangun antarmuka web modern dan responsif.',
                'tech_stack' => ['HTML', 'Bootstrap', 'CSS'],
                'github_url' => 'https://github.com/iqbalhilmi085/html-bootstrap',
                'live_url' => '#',
            ],
            [
                'id' => 6,
                'title' => 'Laprak Sistem Operasi',
                'description' => 'Laporan praktikum sistem operasi semester 4 mencakup konsep manajemen proses, memori, dan file system.',
                'tech_stack' => ['Shell', 'Linux'],
                'github_url' => 'https://github.com/iqbalhilmi085/laprak-sisop-smt4',
                'live_url' => '#',
            ],
        ];

        return view('portfolio.index', compact('profile', 'skills', 'projects'));
    }
}
