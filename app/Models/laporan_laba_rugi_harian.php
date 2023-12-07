<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan_laba_rugi_harian extends Model
{
    use HasFactory;

    protected $table = "laporan_laba_rugi_harian";
    protected $fillable = ['nota', 'nominal', 'total_pendapatan'];
}
