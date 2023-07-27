<?php

namespace Database\Seeders;

use App\Models\Subdistrict;
use Illuminate\Database\Seeder;

class SubdistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subdistrict::upsert([
            ['name' => 'Sawang'],
            ['name' => 'Nisam'],
            ['name' => 'Banda Baro'],
            ['name' => 'Kuta Makmur'],
            ['name' => 'Simpang Keramat'],
            ['name' => 'Syamtalira Bayu'],
            ['name' => 'Geureudong Pase'],
            ['name' => 'Meurah Mulia'],
            ['name' => 'Matangkuli'],
            ['name' => 'Paya Bakong'],
            ['name' => 'Pirak Timu'],
            ['name' => 'Cot Girek'],
            ['name' => 'Tanah Jambo Aye'],
            ['name' => 'Langkahan'],
            ['name' => 'Seunuddon'],
            ['name' => 'Baktiya'],
            ['name' => 'Baktiya Barat'],
            ['name' => 'Lhoksukon'],
            ['name' => 'Tanah Luas'],
            ['name' => 'Nibong'],
            ['name' => 'Samudera'],
            ['name' => 'Syamtalira Aron'],
            ['name' => 'Tanah Pasir'],
            ['name' => 'Lapang'],
            ['name' => 'Muara Batu'],
            ['name' => 'Dewantara'],
        ], ['id'], ['name']);
    }
}
