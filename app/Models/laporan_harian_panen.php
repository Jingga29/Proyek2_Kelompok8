<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan_harian_panen extends Model
{
    use HasFactory;

    protected $table = "laporan_harian_panen"; // Sesuaikan dengan nama tabel di database
    protected $fillable = ['tanggal', 'produk', 'lokasi_panen', 'pegawai_panen'];
}
