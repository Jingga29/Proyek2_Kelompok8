<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BOPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $formattedDate = date('Y-m-d', strtotime('7-2-2023'));

        DB::table('BOP')->insert([
            'tanggal' => $formattedDate,
            'item_bop' => 'mobil',
            'nominal' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('BOP')->insert([
            'tanggal' => $formattedDate,
            'item_bop' => 'mobil',
            'nominal' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('BOP')->insert([
            'tanggal' => $formattedDate,
            'item_bop' => 'mobil',
            'nominal' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('BOP')->insert([
            'tanggal' => $formattedDate,
            'item_bop' => 'mobil',
            'nominal' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('BOP')->insert([
            'tanggal' => $formattedDate,
            'item_bop' => 'mobil',
            'nominal' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('BOP')->insert([
            'tanggal' => $formattedDate,
            'item_bop' => 'mobil',
            'nominal' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('BOP')->insert([
            'tanggal' => $formattedDate,
            'item_bop' => 'mobil',
            'nominal' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('BOP')->insert([
            'tanggal' => $formattedDate,
            'item_bop' => 'mobil',
            'nominal' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('BOP')->insert([
            'tanggal' => $formattedDate,
            'item_bop' => 'mobil',
            'nominal' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('BOP')->insert([
            'tanggal' => $formattedDate,
            'item_bop' => 'mobil',
            'nominal' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('BOP')->insert([
            'tanggal' => $formattedDate,
            'item_bop' => 'mobil',
            'nominal' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('BOP')->insert([
            'tanggal' => $formattedDate,
            'item_bop' => 'mobil',
            'nominal' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
