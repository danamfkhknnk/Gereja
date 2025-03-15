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
        DB::table('wartas')->insert([
            [
                'warta' => 'Kasih Karunia Allah',
                'bacaan' => 'Efesus 2:8-9',
                'nyanyian' => 'Sebab karena kasih karunia kamu diselamatkan oleh iman...',
            ],
            [
                'warta' => 'Iman dan Perbuatan',
                'bacaan' => 'Yakobus 2:17',
                'nyanyian' => 'Demikian juga iman, jika tidak disertai perbuatan, maka iman itu mati...',
            ],
            [
                'warta' => 'Hidup dalam Terang',
                'bacaan' => 'Matius 5:16',
                'nyanyian' => 'Hendaklah terangmu bercahaya di depan orang...',
            ],
            [
                'warta' => 'Damai Sejahtera Allah',
                'bacaan' => 'Filipi 4:7',
                'nyanyian' => 'Damai sejahtera Allah yang melampaui segala akal...',
            ],
            [
                'warta' => 'Panggilan untuk Mengasihi',
                'bacaan' => '1 Yohanes 4:7',
                'nyanyian' => 'Marilah kita saling mengasihi, sebab kasih itu berasal dari Allah...',
            ],
            [
                'warta' => 'Hidup dalam Kerendahan Hati',
                'bacaan' => 'Filipi 2:3',
                'nyanyian' => 'Janganlah kamu berbuat sesuatu dengan kepentingan diri sendiri...',
            ],
            [
                'warta' => 'Janji Tuhan yang Setia',
                'bacaan' => 'Yesaya 41:10',
                'nyanyian' => 'Janganlah takut, sebab Aku menyertai engkau...',
            ],
            [
                'warta' => 'Bersyukur dalam Segala Hal',
                'bacaan' => '1 Tesalonika 5:18',
                'nyanyian' => 'Mengucap syukurlah dalam segala hal, sebab itulah yang dikehendaki Allah...',
            ],
            [
                'warta' => 'Kuat dalam Tuhan',
                'bacaan' => 'Efesus 6:10',
                'nyanyian' => 'Akhirnya, hendaklah kamu kuat di dalam Tuhan, di dalam kekuatan kuasa-Nya...',
            ],
            [
                'warta' => 'Kerajaan Allah Sudah Dekat',
                'bacaan' => 'Markus 1:15',
                'nyanyian' => 'Bertobatlah dan percayalah kepada Injil...',
            ],
        ]);
        
    }
}