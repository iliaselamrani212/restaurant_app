<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resarvation extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function food()
    {
        return $this->belongsTo('App\Models\Food');
    }

    protected $fillable = [
        'nb',
        'prix',
        'user_id',
        'food_id',
        'address_reservation',
        'numero_de_telephone',
        'confimer'
    ];

    
}
