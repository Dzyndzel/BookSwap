<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Swap_history extends Model
{
    protected $fillable = [
        'fst_user','fst_mail','scd_user','scd_mail'
    ];
}
