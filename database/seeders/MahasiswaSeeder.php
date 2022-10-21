<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            'nama_mahasiswa' => 'I Putu Pratama Putra Jiwatmika',
            'prodi' => 'S1 Pendidikan Teknik Informatika',
        ]);
    }
}
