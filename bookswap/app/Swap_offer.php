<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Swap_offer extends Model
{
    protected $fillable = [
        'fst_user','scd_user',
    ];
}
