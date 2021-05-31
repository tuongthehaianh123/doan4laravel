<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    
    protected $table="type_products";

    use HasFactory;
    protected $fillable = ['id','nametype','description','image'];//them
    public function product()
    {
        return $this->hasMany('App\Product','id_type','id');
        //theem localScope
    }
 public function scopeSearch($query )
 {
    if($key=request()->key){
        $query=$query->where('name','like','%'.$key.'%');

       }
    return $query;
}
}

