<?php

namespace App\Http\Controllers;
use App\Models\ProductType;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Bill; 
use App\Models\BillDetail;
use Session;

use Cart;

class CheckoutController extends Controller
{
    public function getcheckout(){
        $type=ProductType::orderBy('id','DESC')->get();
        return view('dathang',compact('type'));
    }
    public function postcheckout(Request $req){
        $cart =Session::get('cart');
     
         $customer=new Customer;
         $customer->name=$req->name;
         $customer->gender=$req->gender;
         $customer->address=$req->address;
         $customer->email=$req->email;
         $customer->phone_number=$req->phone;
         $customer->note=$req->not;
         $customer->save();

         $bill = new Bill;
         $bill->id_customer= $customer->id;
         $bill->date_order= date('Y-m-d');
         $bill->total=(Cart::subtotal(0,'.',''));
         $bill->payment= $req->payment;
         $bill->note=$req->not;
         $bill->oder_status="Đang chờ xử lý";
         $bill->save();

         foreach (Cart::Content() as $item) {
            $bill_detail=new BillDetail;
            $bill_detail->id_bill=$bill->id;
            $bill_detail->id_product=$item->id;
            $bill_detail->quantity=$item->qty;
            $bill_detail->unit_price=$item->price;
            $bill_detail->save();
            }
           
            Session::forget('cart');
            return redirect()->back()->with('thongbao','dat  hang thanh cong');
        
    }
}
