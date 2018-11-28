<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testride extends Model
{
    protected $fillable = [
        'name', 'email', 'telephone','start_date','end_date'
    ];
}
