<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','HomeController@index')->name('home.index');
Route::get('/shop','HomeController@shop') ->name('home.shop');
Route::get('/Women','HomeController@Women') ->name('home.Women');
Route::get('/Product/{id}','HomeController@getbytype');
Route::get('search',[
  'as'=>'search',//đường dẫn bên view
  'uses'=>'HomeController@getSearch' //controller
]);

Route::get('chi-tiet-san-pham/{id}',[
    'as'=>'chitietsanpham',
    'uses'=>'HomeController@getChitietsp'
]);
//login
Route::get('/login','HomeController@getLogin')->name('home.login');
Route::post('/login','HomeController@postLogin')->name('home.login');
//Register
Route::get('/Signin','HomeController@getSignin')->name('home.Signin');
Route::post('/Signin','HomeController@postSignin')->name('home.Signin');
Route::get('/logout','HomeController@getLogout')->name('home.logout');



//cart
Route::get('save-cart','CartController@ShowCart')->name('save-cart');//save-cart laf đường dẫn route
//Route::resource('cart', 'CartController');// ep dl vao phan gio hang
Route::get('add-cart/{id}','CartController@addCart')->name('addCart');
Route::get('delete/{id}','CartController@delete')->name('delete');
Route::post('update-cart-quantity','CartController@update_cart_quantity');
// Route::get('update-cart-quantity/{rowId}','CartController@update_cart_quantity')->name('update-cart-quantity');
Route::get('dathang','CheckoutController@getcheckout')->name('dathang');//save-cart laf đường dẫn route
Route::post('dathang','CheckoutController@postcheckout')->name('dathang');

// Blog
Route::get('News','NewsController@getNews')->name('news');
Route::get('/Chi-tiet-news/{id}','NewsController@getChitietNews')->name('chitietnews');
// lienhe
Route::get('ConTact','NewsController@getContact')->name('contact');

/**   
 *  GET => account.index => danh sách
 * GET => account.create => form thêm mới
 * POST => account.store => khi submit form thêm mới
 * GET => account.show => xem chi tiết
 * GET => account.edit => Hiện thị form edit
 * PUT => account.update => khi submit form edit
 * DELETE => account.destroy => khi xoá
 */
Route:: group(['prefix' => 'admin'], function(){
   Route::get('/','AdminController@dashboard')->name('admin.dashboard');
   Route::resources([
       'product'=>'ProductController',
       'producttype'=>'ProductTypeController',
       'slide'=>'SlideController',
       'customer'=>'CustomerController',
       'bill'=>'BillController',
       'user'=>'UserController',
       'billdetail'=>'BillDetailController',
       'news'=>'NewsController',//route->news
       'ordermanagement'=>'OrderManagementController',//route->ordermanagement
       'view-oder'=>'OrderManagementController',//route->ordermanagement
   ]);
     });
// Route::get('/view-Oder/{id}','OrderManagementController@view_Oder'); 
Route::get('/view-Oder/{id}','OrderManagementController@view_Oder');
Route::get('/print-order/{code}','OrderManagementController@print_order');



     