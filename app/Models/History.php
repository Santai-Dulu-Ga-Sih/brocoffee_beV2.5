<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $fillable =[
        'cart_id',
        'total_harga',
        'beans',
        'cups',
        'customer_id',
        'coffee_id'
    ];

    public function coffee() {
        return $this->belongsTo(Product::class, 'coffee_id');
    }
}
