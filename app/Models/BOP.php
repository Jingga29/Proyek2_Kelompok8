<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BOP extends Model
{
    use HasFactory;

    protected $table = "BOP";
    protected $fillable = ['tanggal', 'item_bop', 'nominal', 'total'];
}
