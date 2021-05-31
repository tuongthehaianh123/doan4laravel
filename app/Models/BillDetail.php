<?php

namespace App\Models;
use App\Models\Product;
use App\Models\Bill;
use App\Models\Customer;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table="bill_detail";
    use HasFactory;
    public function product(){
        return $this->belongsTo('App\Product','id_product','id');
    }
    public function bill(){
        return $this->belongsTo('App\Bill','id_bill','id');
    }
    public function sp(){
        return $this->hasOne(Product::class,'id','id_product');
    }
    public function bil(){
        return $this->hasOne(Bill::class,'id','id_bill');
    }
    // public function aaa(){
    //     return $this->hasOne(Customer::class,'id','id_bill');
    // }


}
