<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $table = 'transactions';
    
    protected $fillable = [
        'amount',
        'type',
        'origin',
        'date',
        'notes',
        'transaction_type',
        'category_id',
        'account_id',
    ];
}
