<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Bill extends Model
{
    protected $table="bills";
    use HasFactory;
    public function customer(){
        return $this->belongsTo('Customer','name','id');
    }
    public function bill_detail(){
        return $this->hasMany('App\BillDetail','id_bill','id');
    }
    public function bil(){
        return $this->hasOne(Customer::class,'id','id_customer');
    }
    public function cus(){
        return $this->hasOne(Customer::class,'id','id_customer');
    }
    
    
    
}
