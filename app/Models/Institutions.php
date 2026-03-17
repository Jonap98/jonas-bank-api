<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institutions extends Model
{
    protected $table = 'institutions';
    
    protected $fillable = [
        'name',
    ];
}
