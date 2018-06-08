<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'author', 'ISBN', 'user_id', 'view_count', 'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
