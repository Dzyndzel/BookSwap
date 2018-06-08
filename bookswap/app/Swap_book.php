<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Swap_book extends Model
{
    protected $fillable = [
        'book_id', 'swap_id', 'owner',
    ];
}
