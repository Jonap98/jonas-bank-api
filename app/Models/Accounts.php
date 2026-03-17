<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    protected $table = 'accounts';
    
    protected $fillable = [
        'name',
        'currency',
        'balance',
        'avalable_balance',
        'credit_limit',
        'closing_day',
        'due_day',
        'is_active',
        'type_id',
        'institution_id',
    ];
}
