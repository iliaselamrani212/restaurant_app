<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
  public function Resarvation()
  {
    return $this->hasMany('App\Models\Resarvation');
  }
    public function Category()
    {
      return $this->belongsTo('App\Models\Category');
    }
    use HasFactory;
    protected $fillable = [
      
       'name',
       'description',
       'price',
       'category_id',
       'image',
       'reduction',
    ];
}
