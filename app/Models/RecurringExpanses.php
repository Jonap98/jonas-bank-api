<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecurringExpanses extends Model
{
    protected $table = 'recurring_expanses';
    
    protected $fillable = [
        'name',
        'amount',
        'payment_day',
        'notes',
        'category_id',
        'frecuency_id',
        'account_id',
        'is_active',
    ];

    
    
    
    
    
    
    
    
}
