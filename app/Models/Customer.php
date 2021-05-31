<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table="customer";
    use HasFactory;
    protected $fillable = ['id','name','email','gender'];//them
    public function bill(){
        return $this->hasMany('App\Bill','id_customer','id');
    }
}
