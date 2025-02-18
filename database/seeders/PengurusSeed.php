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
            'posisi' => 'Pendeta'],
        [
            'jemaat_id' => null,
            'posisi' => 'Majelis 1'
        ],
        [
            'jemaat_id' => null,
            'posisi' => 'Majelis 2'
        ],
        [
            'jemaat_id' => null,
            'posisi' => 'Majelis 3'
        ],
        [
            'jemaat_id' => null,
            'posisi' => 'Majelis 4'
        ],
        [
            'jemaat_id' => null,
            'posisi' => 'Majelis 5'
        ],
        [
            'jemaat_id' => null,
            'posisi' => 'Majelis 6'
        ],
        [
            'jemaat_id' => null,
            'posisi' => 'Majelis 7'
        ],
        [
            'jemaat_id' => null,
            'posisi' => 'Majelis 8'
        ],
        [
            'jemaat_id' => null,
            'posisi' => 'Majelis 9'
        ],
        [
            'jemaat_id' => null,
            'posisi' => 'Majelis 10'
        ],
        [
            'jemaat_id' => null,
            'posisi' => 'Mejlis 11'
        ],
        [
            'jemaat_id' => null,
            'posisi' => 'Mejlis 12'
        ],

        ]);
    }
}