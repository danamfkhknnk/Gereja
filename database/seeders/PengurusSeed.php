<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengurusSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penguruses')->insertOrIgnore([
            ['jemaat_id' => null,
            'posisi' => 'Ketua Bidang Marturia'],
        [
            'jemaat_id' => null,
            'posisi' => 'Sekretaris Umum'
        ],
        [
            'jemaat_id' => null,
            'posisi' => 'Wakil Sekretaris Umum'
        ],
        [
            'jemaat_id' => null,
            'posisi' => 'Bendahara Umum'
        ],
        [
            'jemaat_id' => null,
            'posisi' => 'Wakil Bendahara Umum'
        ],
        [
            'jemaat_id' => null,
            'posisi' => 'Wakil Bendahara Umum'
        ],
        [
            'jemaat_id' => null,
            'posisi' => 'Wakil Bendahara Umum'
        ],
        [
            'jemaat_id' => null,
            'posisi' => 'Guru Sekolah Minggu'
        ],
        [
            'jemaat_id' => null,
            'posisi' => 'Koster'
        ],

        ]);
    }
}