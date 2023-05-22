<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'coffee_id',
        'coffee_url',
        'coffee_nama',
        'coffee_harga',
        'coffee_jenis',
        'coffee_deskripsi',
        'jumlah_pembelian'
    ];

    protected $primaryKey = 'coffee_id';
}
