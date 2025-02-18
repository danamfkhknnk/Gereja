<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WartaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('wartas')->insertOrIgnore([
            'id' => 1,
            'warta' => 'sejarah',
            'bacaan' => 'visiiiii',
            'nyanyian' => 'misiii',
        ]);
    }
}