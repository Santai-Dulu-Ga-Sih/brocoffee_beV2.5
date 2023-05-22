<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Customer extends Authenticatable
{
    use HasFactory, Notifiable;

    public $table = 'customers';
    protected $fillable = [
        'customer_id',
        'customer_username',
        'customer_password'
    ];

    protected $hidden = [
        'customer_password'
    ];
}
