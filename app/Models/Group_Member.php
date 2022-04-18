<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group_Member extends Model
{
    use HasFactory;

      protected $table="group_members";

     protected $fillable = [
        'group_id',
        'member_id',
    ];
}
