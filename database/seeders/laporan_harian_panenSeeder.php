<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class laporan_harian_panenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $formattedDate = date('Y-m-d', strtotime('7-2-2023'));

        DB::table('laporan_harian_panen')->insert([
            'tanggal' => $formattedDate,
            'produk' => 'lele',
            'lokasi_panen' => 'Rancajawat',
            'pegawai_panen' => 'jeno',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('laporan_harian_panen')->insert([
            'tanggal' => $formattedDate,
            'produk' => 'mujaer',
            'lokasi_panen' => 'Rancajawat',
            'pegawai_panen' => 'jeno',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('laporan_harian_panen')->insert([
            'tanggal' => $formattedDate,
            'produk' => 'p',
            'lokasi_panen' => 'Rancajawat',
            'pegawai_panen' => 'jeno',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laporan_harian_panen')->insert([
            'tanggal' => $formattedDate,
            'produk' => 'p',
            'lokasi_panen' => 'Rancajawat',
            'pegawai_panen' => 'jaehyun',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laporan_harian_panen')->insert([
            'tanggal' => $formattedDate,
            'produk' => 'p',
            'lokasi_panen' => 'Rancajawat',
            'pegawai_panen' => 'taeyong',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laporan_harian_panen')->insert([
            'tanggal' => $formattedDate,
            'produk' => 'p',
            'lokasi_panen' => 'Rancajawat',
            'pegawai_panen' => 'doyoung',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laporan_harian_panen')->insert([
            'tanggal' => $formattedDate,
            'produk' => 'p',
            'lokasi_panen' => 'Rancajawat',
            'pegawai_panen' => 'taeil',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laporan_harian_panen')->insert([
            'tanggal' => $formattedDate,
            'produk' => 'p',
            'lokasi_panen' => 'Rancajawat',
            'pegawai_panen' => 'haechan',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laporan_harian_panen')->insert([
            'tanggal' => $formattedDate,
            'produk' => 'p',
            'lokasi_panen' => 'Rancajawat',
            'pegawai_panen' => 'mark',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laporan_harian_panen')->insert([
            'tanggal' => $formattedDate,
            'produk' => 'p',
            'lokasi_panen' => 'Rancajawat',
            'pegawai_panen' => 'chenle',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laporan_harian_panen')->insert([
            'tanggal' => $formattedDate,
            'produk' => 'p',
            'lokasi_panen' => 'Rancajawat',
            'pegawai_panen' => 'renjun',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('laporan_harian_panen')->insert([
            'tanggal' => $formattedDate,
            'produk' => 'p',
            'lokasi_panen' => 'Rancajawat',
            'pegawai_panen' => 'jaemin',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
