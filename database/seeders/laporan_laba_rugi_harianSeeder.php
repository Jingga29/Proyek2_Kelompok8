<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class laporan_laba_rugi_harianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $formattedDate = date('Y-m-d', strtotime('7-2-2023'));

        DB::table('laporan_laba_rugi_harian')->insert([
            'nota' => $formattedDate,
            'nominal' => '1000000',
            'total_pendapatan' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('laporan_laba_rugi_harian')->insert([
            'nota' => $formattedDate,
            'nominal' => '1000000',
            'total_pendapatan' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('laporan_laba_rugi_harian')->insert([
            'nota' => $formattedDate,
            'nominal' => '1000000',
            'total_pendapatan' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laporan_laba_rugi_harian')->insert([
            'nota' => $formattedDate,
            'nominal' => '1000000',
            'total_pendapatan' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laporan_laba_rugi_harian')->insert([
            'nota' => $formattedDate,
            'nominal' => '1000000',
            'total_pendapatan' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laporan_laba_rugi_harian')->insert([
            'nota' => $formattedDate,
            'nominal' => '1000000',
            'total_pendapatan' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laporan_laba_rugi_harian')->insert([
            'nota' => $formattedDate,
            'nominal' => '1000000',
            'total_pendapatan' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laporan_laba_rugi_harian')->insert([
            'nota' => $formattedDate,
            'nominal' => '1000000',
            'total_pendapatan' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laporan_laba_rugi_harian')->insert([
            'nota' => $formattedDate,
            'nominal' => '1000000',
            'total_pendapatan' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laporan_laba_rugi_harian')->insert([
            'nota' => $formattedDate,
            'nominal' => '1000000',
            'total_pendapatan' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laporan_laba_rugi_harian')->insert([
            'nota' => $formattedDate,
            'nominal' => '1000000',
            'total_pendapatan' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laporan_laba_rugi_harian')->insert([
            'nota' => $formattedDate,
            'nominal' => '1000000',
            'total_pendapatan' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
