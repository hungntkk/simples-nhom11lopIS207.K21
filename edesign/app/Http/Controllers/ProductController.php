<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class ProductController extends Controller
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
    
    public function add_product()
	{
		$cate_product = DB::table('tbl_category_product')->orderby('id','desc')->get();// lấy ra category product để hiển thị vào combobox
		return view('add-product')->with('category', $cate_product);//cateproduct là tên khai báo

	}


	public function all_product()
	{
        $all_product = DB::table('tbl_product')//lấy dữ liệu từ table categoy_product join product truyền vào biến all_category_product
        ->join('tbl_category_product', 'tbl_product.category_id','=', 'tbl_category_product.id')
        ->orderby('tbl_product.product_id','desc')->get(); 
        $manager_product = view('all-product')->with('all_product', $all_product);//lấy từ all_c_p màu cam gán vào màu vàng
        return view('admin')->with('all_product',$manager_product);//trang admin sẽ chứa all-category, gán vào biến manager.
	}
      


    public function save_product(Request $request)//yêu cầu
    {
        $data = array();//khai báo biến data là chuỗi array
        $data['product_name'] = $request->product_name;     //lấy dữ liệu theo biến name gửi qua name bên sql
        $data['product_price'] = $request->product_price;
        $data['product_color'] = $request->product_color;
        $data['product_size'] = $request->product_size;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['product_status'] = $request->product_status;
        //vì file ảnh không thể lưu trong database, nên phải lưu ở file source
        $get_image = $request -> file('product_image');
        if($get_image)
        {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();//hàm getClient... này lấy đuôi mở rộng VD:.jpg, .png,...
            $get_image->move('uploads\product', $new_image);//di chuyển ảnh vào trong file đã tạo tự động trong public
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->insert($data);
            Session::put('message', 'Thêm sản phẩm thành công');//sau khi thêm thành công hiển thị message thông báo
            return Redirect::to('add-product');
        }
        $data['product'] = '';
        DB::table('tbl_product')->insert($data);
        Session::put('message', 'Thêm sản phẩm thành công');//sau khi thêm thành công hiển thị message thông báo
        return Redirect::to('add-product');

    }

    public function unactive_product($product_id)
    {
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>1]);
        Session::put('message', 'Hiện danh mục sản phẩm thành công');
        return Redirect::to('all-product');
    }

    public function active_product($product_id)
    {
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>0]);
        Session::put('message', 'Ẩn danh mục sản phẩm thành công');
        return Redirect::to('all-product');
    }

    public function edit_product($product_id)//copy từ hàm all_category_product rồi sửa
    {
        $cate_product = DB::table('tbl_category_product')->orderby('id','desc')->get();// lấy ra category product để hiển thị vào combobox

        $edit_product = DB::table('tbl_product')->where('product_id', $product_id)->get();
        $manager_product = view('edit-product')->with('edit_product', $edit_product)->with('cate_product', $cate_product);
        return view('admin')->with('edit-product',$manager_product);
    }

     public function delete_product($product_id)//copy từ hàm all_category_product rồi sửa    
    {
        DB::table('tbl_product')->where('product_id', $product_id)->delete();
        Session::put('message', 'Xóa sản phẩm thành công');
        return Redirect::to('all-product');
    }


   

    public function update_product(Request $request, $product_id)//yêu cầu
    {
        $data = array();//khai báo biến data là chuỗi array
        $data['product_name'] = $request->product_name;     //lấy dữ liệu theo biến name gửi qua name bên sql
        $data['product_price'] = $request->product_price;
        $data['product_color'] = $request->product_color;
        $data['product_size'] = $request->product_size;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['product_status'] = $request->product_status;
        //vì file ảnh không thể lưu trong database, nên phải lưu ở file source
        $get_image = $request -> file('product_image');
        
        if($get_image)
        {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = rand(0,99).'.'.$get_image->getClientOriginalExtension();//hàm getClient... này lấy đuôi mở rộng VD:.jpg, .png,...
            $get_image->move('uploads/product', $new_image);//di chuyển ảnh vào trong file đã tạo tự động trong public
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->where('product_id', $product_id)->update($data);
            Session::put('message', 'Cập nhật sản phẩm thành công');//sau khi thêm thành công hiển thị message thông báo
            return Redirect::to('all-product');
        }
        DB::table('tbl_product')->where('product_id', $product_id)->update($data);
        Session::put('message', 'Cập nhật sản phẩm thành công');//sau khi thêm thành công hiển thị message thông báo
        return Redirect::to('all-product');

    }

	public function login()
    {
        return true;
    }

    //end admin page
    
}
