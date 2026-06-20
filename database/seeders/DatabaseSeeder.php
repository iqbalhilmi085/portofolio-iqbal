<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Certificate;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Iqbal Hilmi',
            'email' => 'iqbal@example.com',
        ]);

        Profile::create([
            'name' => 'Iqbal Hilmi',
            'title' => 'Junior Back End Developer',
            'about' => 'Hai, saya Iqbal. Laki-laki 20 tahun yang saat ini sedang menekuni dunia web programming. Saat ini saya sedang rutin mengikuti kelas online yang bisa meningkatkan skill saya di dunia web programming. Melihat perkembangan digital yang begitu pesat dan juga kemampuan saya yang cukup mumpuni di bidang web programming, menjadikan profesi ini sebagai salah satu pekerjaan yang akan saya dalami kedepannya.',
            'email' => 'iqbal@example.com',
            'phone' => '+6289659878595',
            'address' => 'Indonesia',
            'social_links' => [
                'github' => 'https://github.com/iqbalhilmi085',
                'linkedin' => 'https://linkedin.com/in/iqbal404',
                'instagram' => 'https://instagram.com/iqbal__404',
            ],
        ]);

        Skill::insert([
            ['name' => 'HTML', 'category' => 'teknologi', 'order' => 1],
            ['name' => 'CSS', 'category' => 'teknologi', 'order' => 2],
            ['name' => 'JavaScript', 'category' => 'teknologi', 'order' => 3],
            ['name' => 'PHP', 'category' => 'teknologi', 'order' => 4],
            ['name' => 'Laravel', 'category' => 'framework', 'order' => 5],
            ['name' => 'Bootstrap', 'category' => 'framework', 'order' => 6],
            ['name' => 'Tailwind CSS', 'category' => 'framework', 'order' => 7],
            ['name' => 'MySQL', 'category' => 'database', 'order' => 8],
            ['name' => 'Git', 'category' => 'tools', 'order' => 9],
            ['name' => 'VS Code', 'category' => 'tools', 'order' => 10],
        ]);

        Project::create([
            'title' => 'Login Management',
            'description' => 'Aplikasi CRUD Login Management dengan fitur autentikasi dan manajemen pengguna.',
            'tech_stack' => ['PHP', 'Laravel', 'MySQL', 'Bootstrap'],
            'github_url' => 'https://github.com/onlyiqbal/crud-login-management',
            'featured' => true,
            'order' => 1,
        ]);

        Project::create([
            'title' => 'Sistem Informasi Mahasiswa',
            'description' => 'Aplikasi CRUD Sistem Informasi Mahasiswa untuk mengelola data mahasiswa.',
            'tech_stack' => ['PHP', 'Laravel', 'MySQL', 'Bootstrap'],
            'github_url' => 'https://github.com/onlyiqbal/crud-sistem-informasi-mahasiswa',
            'featured' => true,
            'order' => 2,
        ]);

        Project::create([
            'title' => 'Stock Manager',
            'description' => 'Aplikasi CRUD Stock Manager untuk mengelola stok barang.',
            'tech_stack' => ['PHP', 'Laravel', 'MySQL', 'Bootstrap'],
            'github_url' => 'https://github.com/onlyiqbal/stock-manager',
            'featured' => true,
            'order' => 3,
        ]);

        Certificate::insert([
            [
                'title' => 'Mengenal Pemrograman Komputer',
                'issuer' => 'Codepolitan',
                'url' => 'https://www.codepolitan.com/c/2IW39PH',
                'order' => 1,
            ],
            [
                'title' => 'Algoritma dan Pemrograman Dasar',
                'issuer' => 'Codepolitan',
                'url' => 'https://www.codepolitan.com/c/2IW39PH',
                'order' => 2,
            ],
            [
                'title' => 'GIT',
                'issuer' => 'Udemy - Eko Kurniawan',
                'url' => 'https://www.udemy.com/certificate/UC-6c59a70d-3f91-4113-bf23-0d03fbb493c6/',
                'order' => 3,
            ],
            [
                'title' => 'Pemrograman PHP',
                'issuer' => 'Udemy - Eko Kurniawan Khannedy',
                'url' => 'https://www.udemy.com/certificate/UC-2b5e8721-67c3-46ef-a5dc-d719698f356f/',
                'order' => 4,
            ],
            [
                'title' => 'Database MySQL',
                'issuer' => 'Udemy - Eko Kurniawan Khannedy',
                'url' => 'https://www.udemy.com/certificate/UC-124c2391-3308-4b2c-85a6-ee3763b18598/',
                'order' => 5,
            ],
        ]);
    }
}
