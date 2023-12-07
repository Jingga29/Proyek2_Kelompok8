<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nota_penjualan extends Model
{
    use HasFactory;

    protected $table = "nota_penjualan"; // Sesuaikan dengan nama tabel di database
    protected $fillable = ['tanggal', 'pembeli', 'lokasi_penjualan', 'jenis', 'jumlah', 'harga', 'total'];
}