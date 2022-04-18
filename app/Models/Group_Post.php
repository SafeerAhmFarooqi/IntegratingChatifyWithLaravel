<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group_Post extends Model
{
    use HasFactory;

     protected $table="group_posts";

     protected $fillable = [
        'group_id',
        'member_id',
        'post_text',
        'post_image'
    ];


}
