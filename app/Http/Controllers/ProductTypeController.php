<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $data=ProductType::orderBy('created_at','DESC')->search()->get();
     
      return view('admin.product_type.index',compact('data'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Producttype::where('id')->orderBy('id','DESC')->get();
        return view('admin.product_type.create')->with(compact('category'));
        
    }

    /**
     * Store a newly created resource in storage.
     *s
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response    
     */
    public function store(Request $request)
    {
        
        Producttype::create($request->all());
        return  redirect()->route ('producttype.index')->with('success','Đã thêm thành công.');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function show(ProductType $productType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductType $producttype)
    {
        return view('admin.product_type.edit')->with(compact('producttype'));

         
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductType $producttype)
    {
       
         $producttype->update($request->only('id','nametype','description'));
        return  redirect()->route('producttype.index')->with('success','Added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post =productType::where('id',$id);
      $post->delete();
        return redirect()->route('producttype.index')->with('success','Data deleted successfully.');
     
    }
}
