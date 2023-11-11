<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','name','price','quantity'];

    public function user()
    {
    	return $this->belongsTo(User::class,'users');
    }
    public function sell()
    {
    	return $this->hasMany(Sell::class,'sells');
    }

}
