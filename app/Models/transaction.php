<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $fillable = [
        'cusotmer_id',
        'item',
        'date',
        'sell_amount',
        'pay_amount',

    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
