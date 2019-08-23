<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'user_name',
        'title',
        'message',
        'star_rate',
        'product_id',
    ];
}
