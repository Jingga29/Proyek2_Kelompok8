<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class nota_penjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $formattedDate = date('Y-m-d', strtotime('7-2-2023'));

        DB::table('nota_penjualan')->insert([
            'tanggal' => $formattedDate,
            'pembeli' => 'jeno',
            'lokas_penjualan' => 'Rancajawat',
            'jenis' => 'lele',
            'jumlah' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('nota_penjualan')->insert([
            'tanggal' => $formattedDate,
            'pembeli' => 'jeno',
            'lokas_penjualan' => 'Rancajawat',
            'jenis' => 'mujaer',
            'jumlah' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('nota_penjualan')->insert([
            'tanggal' => $formattedDate,
            'pembeli' => 'jeno',
            'lokas_penjualan' => 'Rancajawat',
            'jenis' => 'p',
            'jumlah' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('nota_penjualan')->insert([
            'tanggal' => $formattedDate,
            'pembeli' => 'jeno',
            'lokas_penjualan' => 'Rancajawat',
            'jenis' => 'sepat',
            'jumlah' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('nota_penjualan')->insert([
            'tanggal' => $formattedDate,
            'pembeli' => 'jeno',
            'lokas_penjualan' => 'Rancajawat',
            'jenis' => 'betik',
            'jumlah' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('nota_penjualan')->insert([
            'tanggal' => $formattedDate,
            'pembeli' => 'jeno',
            'lokas_penjualan' => 'Rancajawat',
            'jenis' => 'mujaer',
            'jumlah' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('nota_penjualan')->insert([
            'tanggal' => $formattedDate,
            'pembeli' => 'jeno',
            'lokas_penjualan' => 'Rancajawat',
            'jenis' => 'p',
            'jumlah' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('nota_penjualan')->insert([
            'tanggal' => $formattedDate,
            'pembeli' => 'jeno',
            'lokas_penjualan' => 'Rancajawat',
            'jenis' => 'lele',
            'jumlah' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('nota_penjualan')->insert([
            'tanggal' => $formattedDate,
            'pembeli' => 'jeno',
            'lokas_penjualan' => 'Rancajawat',
            'jenis' => 'p',
            'jumlah' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('nota_penjualan')->insert([
            'tanggal' => $formattedDate,
            'pembeli' => 'jeno',
            'lokas_penjualan' => 'Rancajawat',
            'jenis' => 'p',
            'jumlah' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('nota_penjualan')->insert([
            'tanggal' => $formattedDate,
            'pembeli' => 'jeno',
            'lokas_penjualan' => 'Rancajawat',
            'jenis' => 'lele',
            'jumlah' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('nota_penjualan')->insert([
            'tanggal' => $formattedDate,
            'pembeli' => 'jeno',
            'lokas_penjualan' => 'Rancajawat',
            'jenis' => 'p',
            'jumlah' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
