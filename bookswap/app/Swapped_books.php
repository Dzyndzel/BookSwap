<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Swapped_books extends Model
{
    protected $fillable = [
        'book_id', 'swap_history_id', 'owner',
    ];
}
