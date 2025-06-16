<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable = [
        'name',
        'phone',
    ];
    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
