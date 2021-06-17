<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use App\Models\Bill; 

use cart;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
 public function dashboard(Request $req)
 {  
  
    $total=DB::table("bills")->sum('total');
    $sp=Product::orderBy('id','DESC')->get();
    $date=Product::orderBy('id','DESC')->first();
    $kh=User::all();
     $bil=Bill::all();
    
    
    //  $total=DB::table("products")->sum('total');
     return view('admin.dashboard',compact('sp','kh','bil','total','date'));
 }
}
