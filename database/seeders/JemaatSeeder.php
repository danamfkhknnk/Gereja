<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JemaatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jemaats')->insert([
            [
                'nama' => 'Agus Riyanto',
            ],
            [
                'nama' => 'Supriyanto, S.P.',
            ],
            [
                'nama' => 'Suyatmi Suwalyudi',
            ],
            [
                'nama' => 'Ernawati, SE.',
            ],
            [
                'nama' => 'Ardiyanto',
            ],
            [
                'nama' => 'Rusgiyati',
            ],
            [
                'nama' => 'Rusmiati',
            ],
            [
                'nama' => 'Yuswanto',
            ],
            [
                'nama' => 'Stefatus Yofan Sabastian',
            ],
            [
                'nama' => 'Pdt. Ch.Teguh Sayoga',
            ],
            [
                'nama' => 'Suyatmi Suwalyudi',
            ],
            [
                'nama' => 'Sudono',
            ],
            [
                'nama' => 'Murtinah',
            ],
            [
                'nama' => 'Eko Budi Juwono',
            ],
            [
                'nama' => 'Sudirno',
            ],
            [
                'nama' => 'Sismiati',
            ],
            [
                'nama' => 'Simon Theofilus Legiman',
            ],
            [
                'nama' => 'Nitawati',
            ],
            [
                'nama' => 'Sri Lestai',
            ],
            [
                'nama' => 'Agus Priyato ',
            ],
            [
                'nama' => 'Sdr. Suyadi',
            ],
            
        ]);
    }
}