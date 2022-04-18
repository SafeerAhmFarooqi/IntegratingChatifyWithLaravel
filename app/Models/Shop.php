<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Shop extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'shop_name',
        'address',
        'shop_category',
        'phone',
        'email',
        'password',
        'location',
        'shop_status',
    ];
}
