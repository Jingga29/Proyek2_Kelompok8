<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class laba_bulananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $formattedDate = date('Y-m-d');

        DB::table('laba_bulanan')->insert([
            'tanggal' => $formattedDate,
            'jumlah' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('laba_bulanan')->insert([
            'tanggal' => $formattedDate,
            'jumlah' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('laba_bulanan')->insert([
            'tanggal' => $formattedDate,
            'jumlah' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laba_bulanan')->insert([
            'tanggal' => $formattedDate,
            'jumlah' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laba_bulanan')->insert([
            'tanggal' => $formattedDate,
            'jumlah' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laba_bulanan')->insert([
            'tanggal' => $formattedDate,
            'jumlah' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laba_bulanan')->insert([
            'tanggal' => $formattedDate,
            'jumlah' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laba_bulanan')->insert([
            'tanggal' => $formattedDate,
            'jumlah' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laba_bulanan')->insert([
            'tanggal' => $formattedDate,
            'jumlah' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laba_bulanan')->insert([
            'tanggal' => $formattedDate,
            'jumlah' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laba_bulanan')->insert([
            'tanggal' => $formattedDate,
            'jumlah' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laba_bulanan')->insert([
            'tanggal' => $formattedDate,
            'jumlah' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
