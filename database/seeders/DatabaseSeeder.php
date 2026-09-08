<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat User Dummy
        $admin = User::create([
            'name' => 'Admin Kampus',
            'email' => 'admin@kampus.ac.id',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        $mahasiswa = User::create([
            'name' => 'Susi Susanti',
            'email' => 'susi@student.kampus.ac.id',
            'password' => Hash::make('password'),
            'role' => 'mahasiswa',
        ]);

        // 2. Buat Kategori Dummy
        $catDesain = Category::create(['name' => 'Desain Grafis']);
        $catKetik = Category::create(['name' => 'Pengetikan & Format THP']);
        $catWeb     = Category::create(['name' => 'Pemrograman & Web']);
        $catLes     = Category::create(['name' => 'Les Privat & Tutoring']);
        $catTrans   = Category::create(['name' => 'Penerjemah & B. Inggris']);
        $catVideo   = Category::create(['name' => 'Editing Video & Foto']);

        // 3. Buat Jasa Dummy
        Service::create([
            'user_id' => $mahasiswa->id,
            'category_id' => $catDesain->id,
            'title' => 'Jasa Desain Poster & Banner Tugas',
            'price' => 50000,
            'description' => 'Siap melayani pembuatan poster tugas kuliah, pengerjaan cepat 1 hari selesai.',
        ]);

        Service::create([
            'user_id' => $mahasiswa->id,
            'category_id' => $catWeb->id,
            'title' => 'Jasa Pembuatan Website Landing Page',
            'price' => 150000,
            'description' => 'Bantu buatkan website landing page responsive untuk tugas akhir atau UMKM.',
        ]);
    }
}