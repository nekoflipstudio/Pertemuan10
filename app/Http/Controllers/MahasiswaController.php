<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nim' => '251011700108',
            'nama' => 'Gunawan Ardiansyah',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'Universitas Pamulang',
            'email' => 'gunawanarddy@gmail.com',
            'status' => 'Aktif',
        ];

        return view('pages.profile', compact('mahasiswa'));
    }
}