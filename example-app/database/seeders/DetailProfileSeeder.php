<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data ke tabel pegawai
        DB::table('detail_profile')->insert([
            'adress' => 'Jember',
            'nomor_tlp' => '0823435456',
            'ttl' => '2000-12-12',
            'foto' => 'picture.png'
        ]);
    
    }
}
