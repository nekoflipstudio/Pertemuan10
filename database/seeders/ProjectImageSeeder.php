<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectImageSeeder extends Seeder
{
    /**
     * Pasang gambar ke project yang belum punya gambar (atau file gambarnya hilang).
     * Aman dijalankan berkali-kali, tidak membuat data baru.
     */
    public function run(): void
    {
        $dir = 'uploads/projects/';

        $byKeyword = [
            'erp'       => 'erp.jpg',
            'hris'      => 'hris.jpg',
            'scm'       => 'scm.jpg',
            'wms'       => 'wms.jpg',
            'warehouse' => 'wms.jpg',
        ];

        foreach (Project::all() as $project) {
            $hasFile = $project->image && file_exists(public_path($project->image));
            if ($hasFile) {
                continue;
            }

            $file = 'project-web.jpg';
            foreach ($byKeyword as $keyword => $img) {
                if (str_contains(strtolower($project->title), $keyword)) {
                    $file = $img;
                    break;
                }
            }

            $project->update(['image' => $dir . $file]);
        }
    }
}
