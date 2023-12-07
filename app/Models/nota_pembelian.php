<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nota_pembelian extends Model
{
    use HasFactory;

    protected $table = "nota_pembelian"; // Sesuaikan dengan nama tabel di database
    protected $fillable = ['tanggal', 'nama_petani', 'lokasi', 'jumlah_ikan', 'harga', 'total'];
}
