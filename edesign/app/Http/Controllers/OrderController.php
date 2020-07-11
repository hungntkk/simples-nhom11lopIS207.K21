<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class OrderController extends Controller
{
	 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
 //    public function add_category_product()
	// {
	// 	return view('add-category-product');

	// }
 

	public function details_order()
	{
        $details_order = DB::table('tbl_payment')
        ->join('tbl_shipping', 'tbl_payment.shipping_id','=', 'tbl_shipping.shipping_id')
        ->orderby('tbl_payment.payment_id','desc')->get(); 
        $manager_order = view('details-order')->with('details_order', $details_order);//lấy từ all_c_p màu cam gán vào màu vàng
        return view('admin')->with('details_order',$manager_order);//trang admin sẽ chứa all-category, gán vào biến manager.
	}
    
   

    public function unactive_order($payment_id)
    {
        DB::table('tbl_payment')->where('payment_id', $payment_id)->update(['payment_status'=>1]);
        Session::put('message', 'Chờ xét duyệt đơn hàng thành công');
        return Redirect::to('details-order');
    }

    public function active_order($payment_id)
    {
        DB::table('tbl_payment')->where('payment_id', $payment_id)->update(['payment_status'=>2]);
        Session::put('message', 'Xét duyệt đơn hàng thành công');
        return Redirect::to('details-order');
    }

    public function details_of_order($payment_id)
    {
        // $payment = DB::table('tbl_payment')->where('payment_id', $payment_id)->get();
        $details_payment=DB::table('tbl_order_details')->where('payment_id', $payment_id)->get();
        $details_of_payment = view('details-of-order')->with('details_of_payment', $details_payment);
        return view('admin')->with('details_of_payment',$details_of_payment);
    }

    public function delete_order($payment_id)//copy từ hàm all_category_product rồi sửa    
    {
        DB::table('tbl_order_details')->where('payment_id', $payment_id)->delete();
        DB::table('tbl_payment')->where('payment_id', $payment_id)->delete();
        Session::put('message', 'Xóa đơn hàng thành công');
        return Redirect::to('details-order');
    }

    // public function update_category_product(Request $request, $category_product_id)
    // {
    //     $data = array();
    //     $data['category_name'] = $request->category_product_name;     //lấy dữ liệu theo biến category_product_name been edit category gửi qua name bên sql
    //     $data['category_desc'] = $request->category_product_desc;
    //     DB::table('tbl_category_product')->where('id', $category_product_id)->update($data);
    //     Session::put('message', 'Cập nhật danh mục sản phẩm thành công');
    //     return Redirect::to('all-category-product');

    // }

	public function login()
    {
        return true;
    }
}
