<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Cart;	
session_start();

class CheckoutController extends Controller
{

    public function login_checkout()
    {
    	$cate_product = DB::table('tbl_category_product')->orderby('id','desc')->get();
    	return view('checkout.login-checkout')->with('category', $cate_product);
    }

    // public function save_checkout(Request $request)
    // {
    // 	$data = array();//khai báo biến data là chuỗi array
    //     $data['shipping_name'] = $request->shipping_name;     //lấy dữ liệu theo biến name gửi qua name bên sql
    //     $data['shipping_phone'] = $request->shipping_phone;
    //     $data['shipping_address'] = $request->shipping_address;
    //     $data['shipping_email'] = $request->shipping_email;
    //     $data['shipping_notes'] = $request->shipping_notes;
  		// $shipping_id = DB::table('tbl_shipping')->insertGetId($data);
  		// Session::put('shipping_id',$shipping_id);
    //     return Redirect('/payment');
    // }


    public function payment_success()
    {
    	return view('checkout.payment-success');
    }

    public function payment(Request $request)
    {

    	// $content=Cart::content();
    	// echo $content;
    	$data = array();//khai báo biến data là chuỗi array
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_address'] = $request->shipping_address;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_notes'] = $request->shipping_notes;
  		$shipping_id = DB::table('tbl_shipping')->insertGetId($data);
  		
    	
    	//payment
    	$payment_data = array();//khai báo biến data là chuỗi array
        $payment_data['shipping_id'] = $shipping_id;     //lấy dữ liệu theo biến name gửi qua name bên sql
        $payment_data['payment_fee'] = Cart::total();
        $payment_data['payment_status'] = '1';
        $payment_data['payment_method'] = '1';
        $payment_id = DB::table('tbl_payment')->insertGetId($payment_data);
    	//endpayment


    	//list order
    	$content = Cart::content();
    	foreach($content as $v_content)
    	{
    		$order_details_data['payment_id']=$payment_id;
    		$order_details_data['product_id']=$v_content->id;
    		$order_details_data['product_name']=$v_content->name;
    		$order_details_data['product_price']=$v_content->price;
    		$order_details_data['order_qty']=$v_content->qty;
    		DB::table('tbl_order_details')->insert($order_details_data);
    	}					
    	//end list order
    	
    	//Đặt hàng xong xóa dữ liệu giỏ hàng
    	foreach($content as $v_content)
    	$rowId=$v_content->rowId;

    	if($rowId == ''){
    		return Redirect('/payment-success');
    	}
    	else{
    		Cart::update($rowId, 0);
    		return Redirect('/payment-success');
    	}
    }
}
