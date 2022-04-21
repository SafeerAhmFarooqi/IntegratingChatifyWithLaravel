<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UseVoucher extends Model
{
    use HasFactory;

    protected $table = 'use_vouchers';

      protected $fillable = [
        'title',
        'code',
        'image',
        'discount',
        'shop_id',
        'user_id',
    ];
}
