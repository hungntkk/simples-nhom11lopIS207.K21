<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryProduct extends Controller
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
    
    public function add_category_product()
	{
		return view('add-category-product');

	}
 

	public function all_category_product()
	{
        $all_category_product = DB::table('tbl_category_product')->get(); //lấy dữ liệu từ table categoy_product truyền vào biến all_category_product
        $manager_category_product = view('all-category-product')->with('all_category_product', $all_category_product);//lấy từ all_c_p màu cam gán vào màu vàng
        return view('admin')->with('all_category_product',$manager_category_product);//trang admin sẽ chứa all-category, gán vào biến manager.
	}
    
    public function save_category_product(Request $request)//yêu cầu
    {
        $data = array();//khai báo biến data là chuỗi array
        $data['category_name'] = $request->category_product_name;     //lấy dữ liệu theo biến name gửi qua name bên sql
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_product_status;
        // echo '<pre>';   //thử in ra coi thử lấy đc chưa
        //     print_r($data);
        // echo '</pre>';
        
        //  //đã lấy đc dữ liệu, sau đây insert vào csdl:
        
        DB::table('tbl_category_product')->insert($data);
        Session::put('message', 'Thêm danh mục sản phẩm thành công');//sau khi thêm thành công hiển thị message thông báo
        return Redirect::to('add-category-product');

    }

    public function unactive_category_product($category_product_id)
    {
        DB::table('tbl_category_product')->where('id', $category_product_id)->update(['category_status'=>1]);
        Session::put('message', 'Hiện danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }

    public function active_category_product($category_product_id)
    {
        DB::table('tbl_category_product')->where('id', $category_product_id)->update(['category_status'=>0]);
        Session::put('message', 'Ẩn danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }

    public function edit_category_product($category_product_id)//copy từ hàm all_category_product rồi sửa
    {
        $edit_category_product = DB::table('tbl_category_product')->where('id', $category_product_id)->get();
        $manager_category_product = view('edit-category-product')->with('edit_category_product', $edit_category_product);
        return view('admin')->with('edit_category_product',$manager_category_product);
    }
     public function delete_category_product($category_product_id)//copy từ hàm all_category_product rồi sửa    
    {
        DB::table('tbl_category_product')->where('id', $category_product_id)->delete();
        Session::put('message', 'Xóa danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }

    public function update_category_product(Request $request, $category_product_id)
    {
        $data = array();
        $data['category_name'] = $request->category_product_name;     //lấy dữ liệu theo biến category_product_name been edit category gửi qua name bên sql
        $data['category_desc'] = $request->category_product_desc;
        DB::table('tbl_category_product')->where('id', $category_product_id)->update($data);
        Session::put('message', 'Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');

    }

	public function login()
    {
        return true;
    }
}
