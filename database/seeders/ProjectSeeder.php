<?php

namespace Database\Seeders;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $projects = [
            [
                'title' => 'Sistem Informasi Akademik',
                'description' => 'Aplikasi berbasi web untuk mengelola data akademik mahasiswa, dosen, dan mata kuliah.',
                'technology' => 'Laravel, Mysql',
                'image' => 'project1.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'E-Commerce SEO Optimization',
                'description' => 'Aplikasi optimalisasi struktur heading dan indexing halaman web toko online',
                'technology' => 'PHP & Google Search Console',
                'image' => 'project2.jpg',
                'status' => 'In Progress',
            ],
            [
                'title' => 'Redesign Cover dan Branding',
                'description' => 'Perancangan elemen grafis cover komik',
                'technology' => 'Clip Studio Paint',
                'image' => 'project3.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Membuat logo keperluan konten youtube',
                'description' => 'Perancangan elemen grafis logo youtube',
                'technology' => 'Adobe Illustrator, Adobe Photoshop',
                'image' => 'project4.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Redesign produk label kemasan brownies Amanda',
                'description' => 'Perancangan elemen untuk label kemasan brownies Amanda',
                'technology' => 'Adobe Illustrator',
                'image' => 'project5.jpg',
                'status' => 'selesai',
            ],
          
            
        ];
        
            foreach ($projects as $project) {
                Project::create($project);
            }
    }
}
