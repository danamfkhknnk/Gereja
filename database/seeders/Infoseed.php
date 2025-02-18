<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Infoseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('informasis')->insertOrIgnore([
            'id' => 1,
            'sejarah' => 'sejarah',
            'visi' => 'visiiiii',
            'misi' => 'misiii',
            'wa' => '341414141412',
            'ig' => '121241241241',
            'fb' => 'adadads',
            'alamat' => 'Karang Pakis Rt 6 Rw 1, Desa Jepang Pakis, Kecamatan Jati, Kabupaten Kudus, Jawa Tengah - 59342',
            'galeri' => 'ada',
            'logo' => 'logo',
        ]);
    }
}