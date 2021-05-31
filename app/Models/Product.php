<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductType;

class Product extends Model
{
    public $timestamps = false;
    protected $table="products";    
    use HasFactory;
    protected $fillable = ['name','description','id_type','unit_price','image','image1','image2','image3'];//them
    public function product_type(){
        return $this->belongsTo('App\ProductType','id_type','id');
    }
    public function type(){
        return $this->hasOne(ProductType::class,'id','id_type');
    }
    public function bill_detail(){
        return $this->hasMany('App\BillDetail','id_product','id');
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
