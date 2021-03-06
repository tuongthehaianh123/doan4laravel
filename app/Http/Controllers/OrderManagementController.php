<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\Customer;
use App\Models\User;
use App\Models\BillDetail;
use App\Models\Product;
use App\Models\ProductType  ;
use Cart;
use DB;
use Hash;
use Session;
use Auth;
use PDF;
class OrderManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bill=Bill::orderBy('created_at','DESC')->paginate(7);
        $cus=Customer::orderBy('id','DESC')->get()->take(10);
        return view('admin.qlyOrder.index',compact ('bill','cus'));
    }
     public function view_Oder($id){
        
    //      $order_by_id = Bill::join('Customer', 'Bill.id_customer', '=', 'Customer.id')
    //          ->join('BillDetail', 'Bill.id' ,'=', 'BillDetail.id_bill')     
    //          ->select(' Bill.*', 'Customer.*', 'BillDetail.*')->first();
    //    $order_by_id1 = BillDetail::join('Product', 'BillDetail.id_product', '=', 'Product.id')
    //    ->select(' BillDetail.*', 'Product.*')->first();
    //     return view('admin.qlyOrder.view', compact('order_by_id',' order_by_id1'));
     //$kh = Bill::where('id',$id)->join('Customer', 'Bill.id_customer', '=', 'Customer.id') ->select( 'Customer.*')->first();
    $bd= BillDetail::where('id_bill',$id)->get();
    $sp=Product::orderBy('id','DESC')->get();
    $bil=Bill::orderBy('id','DESC')->where('id',$id)->first();
    $cus=Product::orderBy('id','DESC')->get();
    return view('admin.qlyOrder.view', compact('bd','sp','bil','cus'));      
         // return view('admin.qlyOrder.view');
     }
     // xem gio hang
     public function view_Odercustomer(){
      
        $bd=Bill::where("id",Auth::user()->id)->get();
        $bil=Bill::where("id_customer",Auth::user()->id)->first();
        $sp=Product::orderBy('id','DESC')->get();
        $bdd= BillDetail::where('id_bill','DESC')->get();
        $cus=Customer::orderBy('id','DESC')->get();
        $type=ProductType::orderBy('id','DESC')->get();
        return view('xemlaigio',compact ('bd','sp','cus','type','bil','bdd'));
      
       
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
    public function view($id)
    {
        return view('admin.qlyOrder.view');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
       // in don hang
       public function print_order($code){
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHtml($this->print_order_covert($code));
        return $pdf->stream();
    }
    public function print_order_covert($code){
      $bd= BillDetail::where('id_bill',$code)->get();
      $sp=Product::orderBy('id','DESC')->get();
      $bil=Bill::orderBy('id','DESC')->where('id',$code)->first();
      $cus=Product::orderBy('id','DESC')->get();
      // return view('admin.qlyOrder.view', compact('bd','sp','bil','cus')); 
      
      $output=" ";
      
      $output.= '

            <style>
            body{
                font-family : DejaVu Sans;
            }
               
            .table-styling{
                border: 1px solid #000; 
                width: 700px;
                border-collapse: collapse;
                margin-top:20px
            } 
             .table-styling thead tr th{
                border: 1px solid #000; 
                height: 50px
            } 
           
             .table-styling tbody tr td{
                border: 1px solid #000; 
            } 
           
            </style>
         
            
           <span ><span style="font-size: 33pt;  font-family: Georgia, serif">Remmy </span> <span style="margin-left:180px;font-size: 28pt;"> H??a ????n b??n l???</span></span><br>
            <p>HotLine: 0981331137 <span style="margin-left:200px;"> Fanpage: Remmy.com.vn</p>';
         $output.='<span >T??n Kh??ch h??ng: '.$bil->cus->name.'</span>
                   <span style=" margin-left:100px;">  <span> S??? ??i???n tho???i:</span>  '.$bil->cus->phone_number.'</span> <br>
                    <span style=" line-height: 20px">?????a ch???: '.$bil->cus->address.'</span>
                    ';
           
   $output.='
           
              <table class="table-styling">
            
            <thead>
                <tr>
                       
                        <th>T??n s???n ph???m</th>
                     <th>S??? l?????ng</th>
         
                        <th>Gi?? b??n </th>
                        <th>Th??nh ti???n </th>
                </tr>
            </thead>
            <tbody>';
           
            
   
            foreach($bd as $item){
            
  $output.='

                <tr>
                        <td><center> '.$item->sp->name.'</center></td>
                       
                          <td><center>  X'.$item->quantity.'</center></td>
                       
                          <td><span style=" float: right">  '.number_format($item->unit_price).'??&nbsp;??</span></td>
                          <td><span style=" float: right">   '.number_format($item->unit_price*$item->quantity).'??&nbsp;??</span></td>

                </tr>';
            }

           
   $output.='
            </tbody>
            </table>';
    
             $output.='
               <span>Ghi ch?? :'.$bil->note.'
                 <h4>Free Ship:100%</h4></span> <span style=" color:#d80707;float: right">T???ng th??nh ti???n:&nbsp;  <h4>Payment Total:'.number_format($bil->total).'??</h4>&nbsp;</span>
                    <p>
                <span style=" font-style: oblique;">  <p><br>Th??nh ti???n (  B???ng ch???):........................................................................................................................................<br>........................................................................................................................................</span></p>
                    <p><span style=" font-style: oblique;">"S???n ph???m ???????c b???o h??nh 1 ?????i 1 trong 7 ng??y.
                    <span style="margin-left:75px">Ng??y.....th??ng.....n??m......</span>
                    <br> Qu?? kh??ch vui l??ng mang theo h??a ????n
                 <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ng?????i l???p h??a ????n</span>
                 <br> v?? h??ng h??a b??? l???i ?????n ????? ???????c b???o h??nh."</span>
                 <h4 style=" ">Remmy r???t h??n h???nh ???????c ????n ti???p!<h4></p>
                    ';

            return $output;
    }
   
}

// <H2 ><center> ***Welcome To Remmy***</center> </H2>
// <h4>Customer Information 
// </h4>
// <table>
//          <thead> 
//            <tr>
//            <th>ID</th>
//            <th>Name</th>
//            <th>Gender</th>
//            <th>Address</th>
//            <th>Phone</th>
       
//            </tr>
//          </thead>
//          <tbody>';
        
//          $output.='
//             <tr>
//             <td>
//             '.$bil->id_customer.'
//             </td>
//              <td>
//              '.$bil->cus->name.'
//             </td>
//             <td>
//             '.$bil->cus->gender.'
//             </td>
//             <td>
//             '.$bil->cus->address.'
//             </td>
//             <td>
//             '.$bil->cus->phone_number.'
//             </td>
//              </tr>';
//         $output.='
//          </tbody>
//          </table>

//       <h4>Shipping Method And Booking Date  </h4>
              
//       <table>
//          <thead> 
//            <tr>
//            <th>Date of Order </th>
//            <th>Delivery Method</th>
//            <th>Note</th>
       
//            </tr>
//          </thead>
//          <tbody>';
        
//          $output.='
//             <tr>
//             <td>
//             '.$bil->created_at.'
//             </td>
//              <td>
//              '.$bil->payment.'
//             </td>
//             <td>
//             '.$bil->note.'
//             </td>
         
//              </tr>';
//         $output.='
//          </tbody>
//          </table>

//          <h4>Invoice Details</h4>
//          <table>
//                   <thead> 
//                         <tr>
//                    <th>Product Name </th>
//                    <th>Quantity</th>
//                    <th>Price</th>
//                    <th>Total Money </th> 
                
//                     </tr>
//                   </thead>
//                   <tbody>';
//                  foreach ($bd as $item){
//                   $output.='
//                   <tr>
//                     <td>
//                     '.$item->sp->name.'
//                     </td>
//                     <td >
//                     X'.$item->quantity.'
//                     </td>
//                     <td>
//                     '.number_format($item->unit_price).'??
//                     </td>
//                     <td>
//                     '.number_format($item->unit_price*$item->quantity).'??
//                     </td>
//                     </tr>';
                    
//                   }
                  
                 
//                  $output.='
               
//                   </tbody>
//                   </table>
//                   <h4>Free Ship:100%</h4>
//                   <h4>Payment Total:'.number_format($bil->total).'??</h4>
                
//          ';
         


// return $output;
