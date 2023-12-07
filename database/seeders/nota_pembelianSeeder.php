<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class nota_pembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $formattedDate = date('Y-m-d', strtotime('7-2-2023'));

        DB::table('nota_pembelian')->insert([
            'tanggal' => $formattedDate,
            'nama_petani' => 'jeno',
            'lokasi' => 'Rancajawat',
            'jumlah_ikan' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('nota_pembelian')->insert([
            'tanggal' => $formattedDate,
            'nama_petani' => 'jeno',
            'lokasi' => 'Rancajawat',
            'jumlah_ikan' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('nota_pembelian')->insert([
            'tanggal' => $formattedDate,
            'nama_petani' => 'jeno',
            'lokasi' => 'Rancajawat',
            'jumlah_ikan' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('nota_pembelian')->insert([
            'tanggal' => $formattedDate,
            'nama_petani' => 'jeno',
            'lokasi' => 'Rancajawat',
            'jumlah_ikan' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('nota_pembelian')->insert([
            'tanggal' => $formattedDate,
            'nama_petani' => 'jeno',
            'lokasi' => 'Rancajawat',
            'jumlah_ikan' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('nota_pembelian')->insert([
            'tanggal' => $formattedDate,
            'nama_petani' => 'jeno',
            'lokasi' => 'Rancajawat',
            'jumlah_ikan' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('nota_pembelian')->insert([
            'tanggal' => $formattedDate,
            'nama_petani' => 'jeno',
            'lokasi' => 'Rancajawat',
            'jumlah_ikan' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('nota_pembelian')->insert([
            'tanggal' => $formattedDate,
            'nama_petani' => 'jeno',
            'lokasi' => 'Rancajawat',
            'jumlah_ikan' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('nota_pembelian')->insert([
            'tanggal' => $formattedDate,
            'nama_petani' => 'jeno',
            'lokasi' => 'Rancajawat',
            'jumlah_ikan' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('nota_pembelian')->insert([
            'tanggal' => $formattedDate,
            'nama_petani' => 'jeno',
            'lokasi' => 'Rancajawat',
            'jumlah_ikan' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('nota_pembelian')->insert([
            'tanggal' => $formattedDate,
            'nama_petani' => 'jeno',
            'lokasi' => 'Rancajawat',
            'jumlah_ikan' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('nota_pembelian')->insert([
            'tanggal' => $formattedDate,
            'nama_petani' => 'jeno',
            'lokasi' => 'Rancajawat',
            'jumlah_ikan' => '50',
            'harga' => '1000000',
            'total' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
