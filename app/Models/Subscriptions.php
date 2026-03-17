<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriptions extends Model
{
    protected $table = 'subscriptions';
    
    protected $fillable = [
        'name',
        'amount',
        'payment_day',
        'notes',
        'category_id',
        'frecuency_id',
        'account_id',
        'merchant_id',
        'is_active',
    ];
}
