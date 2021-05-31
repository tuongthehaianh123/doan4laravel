<?php

namespace App\Http\Controllers;
use App\Models\ProductType;

use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ShowCart()
    {
       // $product=Product::inRandomOrder()->limit(10)->get();
       $type=ProductType::orderBy('id','DESC')->get();

        $cart=Cart::content();
        return view('cart',compact('cart','type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_cart_quantity(Request $request)
    {
        $rowId=$request->rowIdcart;
        $qty=$request->cart_quantity;
        // $product=Cart::get($rowId);
        // $qty=$product->qty+1;
        Cart::update($rowId,$qty);
      
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
        {
            if($id=='all'){
                Cart::destroy();
            }else{
                Cart::remove($id);
            }
            
         return back();
        }
    public function addCart($id,Request $request)
    {
        $product=Product::find($id);
        if($request->qty){
            $qty = $request->qty;
        }
        else{
            $qty =1;
        }
        // if($product->unit_price>0){
        //     $unit_price=$product->unit_price;
        // }else{
        //     $unit_price=$product->$unit_price;
        // }
      
        $cart=['id' => $id,
        'name' => $product->name,
        'qty' =>$qty,
        'price'=>$product->unit_price,
        'weight'=>'0',
        'options' => ['img'=>$product->image]];
       Cart::add($cart);
      
    
      return back()->with('thongbao','da mua hang'.$product->name.'thanh cong');
    }
}
