<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laba_bulanan extends Model
{
    use HasFactory;

    protected $table = "laba_bulanan"; // Sesuaikan dengan nama tabel di database
    protected $fillable = ['tanggal', 'jumlah', 'total'];
    protected $dates = ['created_at', 'updated_at'];

    public $timestamps = false;
}
