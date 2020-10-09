<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CineFunction extends Model
{
    protected $fillable =[
    'start', 
    'end', 
    'available',
    'level'
        ];
}
