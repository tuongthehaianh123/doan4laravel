<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\User;
use Hash;
use Session;
use Auth;
use App\Models\Customer;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class Homecontroller extends Controller
{
  
   
 public function index(){
  $data=Product::orderBy('id','DESC')->increment('new');//
     $sanpham=Product::orderBy('id','DESC')->paginate(3);
     $type=ProductType::orderBy('id','DESC')->get()->take(10);
     return view('home',compact ('sanpham','type','data'));
     
 }


 public function shop(){
    $type=ProductType::orderBy('id','DESC')->get()->take(10);
    $sanpham=Product::orderBy('id','DESC')->paginate(9);
    return view('shop',compact ('sanpham','type'));

  }


  
  public function getbytype($id)
  {
    $type=ProductType::orderBy('id','DESC')->get()->take(10);

    $sp_=Product::where('id_type',$id)->get();
    $sanpham=Product::orderBy('id','DESC')->paginate(4);

    return view('Women',compact('sp_','sanpham','type'));
  

}
public function getSearch(Request $req){
  $type=ProductType::orderBy('id','DESC')->get();

  
  $product =Product::where('name','like','%'.$req->keyy.'%')
                                       ->orWhere('unit_price',$req->keyy)->get();
                                       return view('search',compact('product','type'));
}

public function getChitietsp(Request $req){
  $type=ProductType::orderBy('id','DESC')->get();
  $sanpham=Product::where('id',$req->id)->first();
  $sp_tuongtu=Product::where('id_type',$sanpham->id_type)->paginate(4);
  return view('chitietsanpham',compact('sanpham','type','sp_tuongtu')); 
}
//dang nhap
  public function  getLogin(){
    $type=ProductType::orderBy('id','DESC')->get();
    return view('login',compact('type'));
  }
  //dang ky
  public function  getSignin(){
    $type=ProductType::orderBy('id','DESC')->get();
    return view('signin',compact('type'));
  }
  public function  postSignin(Request $req){
    $this->validate($req,
      [
        'email'=>'required|email|unique:users,email',  
        'password'=>'required|min:6|max:20',  
        'fullname'=>'required',
        're_password'=>'required|same:password'

      ],
      [
        'email.required'=>'Vui long nhap email',
        'email.email'=>'Khong dung dinh dang email',
        'email.unique'=>'Email da co nguoi su dung',
        'password.required'=>'Vui long nhap password',
        're_password.sam'=>'Mat khau  khong giong nhau',
        'password.min'=>'Mat khau it nhat 6 ki tu'

      ]);
      $user=new Customer();
      $user->name=$req->fullname;
      $user->email=$req->email;
      $user->gender=$req->gender;
      $user->password=Hash::make($req->password);
      $user->phone_number=$req->phone;
      $user->address=$req->address;
      $user->save();
   
    return redirect()->back()->with('thanhcong','Account successfully created ✅');
}
 public function postLogin(Request $req){
   
   $this->validate($req,
   [
    'email'=>'required|email',    
    'password'=>'required|min:6|max:20'
    
   ],
   [
    'email.required'=>'Vui long nhap email',  
    'email.email'=>'Khong dung dinh dang email',
    'password.required'=>'Vui long nhap password',
    're_password.sam'=>'Mat khau  khong giong nhau',
    'password.min'=>'Mat khau it nhat 6 ki tu',
    'password.max'=>'Mat khau khong qua 30  ki tu'
    ]);
    $credentials=array('email'=>$req->email,'password'=>$req->password);
    if(Auth::attempt($credentials)){
    (Auth::user()); 
      return redirect()->back()->with(['flag'=>'success','message'=>'Logged in successfully ✅']);

    }else{
      return redirect()->back()->with(['flag'=>'danger','message'=>'login unsuccessful ✅']);

    }
 }
     public function getLogout(){
      Auth::logout();
       return redirect()->route('home.index');
     }
}


