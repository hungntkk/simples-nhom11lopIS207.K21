<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class BlogController extends Controller
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
    
    public function add_blog()
	{
		return view('blog.add-blog');

	}
 

	public function all_blog()
	{
        $all_blog = DB::table('tbl_blog')->get(); //lấy dữ liệu từ table categoy_product truyền vào biến all_category_product
        $manager_blog = view('blog.all-blog')->with('all_blog', $all_blog);//lấy từ all_c_p màu cam gán vào màu vàng
        return view('admin')->with('all_blog',$manager_blog);//trang admin sẽ chứa all-category, gán vào biến manager.
	}
    
    public function save_blog(Request $request)//yêu cầu
    {
        $data = array();//khai báo biến data là chuỗi array
        $data['blog_name'] = $request->blog_name;     //lấy dữ liệu theo biến name gửi qua name bên sql
        $data['blog_quote'] = $request->blog_quote;
        $data['blog_content1'] = $request->blog_content1;
        $data['blog_content2'] = $request->blog_content2;
        $data['blog_content3'] = $request->blog_content3;
        $data['blog_status'] = $request->blog_status;
        
       //vì file ảnh không thể lưu trong database, nên phải lưu ở file source
        $get_image = $request -> file('blog_image');
        if($get_image)
        {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();//hàm getClient... này lấy đuôi mở rộng VD:.jpg, .png,...
            $get_image->move('uploads\blog', $new_image);//di chuyển ảnh vào trong file đã tạo tự động trong public
            $data['blog_image'] = $new_image;
            DB::table('tbl_blog')->insert($data);
            Session::put('message', 'Thêm bài viết thành công');//sau khi thêm thành công hiển thị message thông báo
            return Redirect::to('add-blog');
        }
        $data['blog'] = '';
        DB::table('tbl_blog')->insert($data);
        Session::put('message', 'Thêm bài viết thành công');//sau khi thêm thành công hiển thị message thông báo
        return Redirect::to('add-blog');

    }

    public function unactive_blog($blog_id)
    {
        DB::table('tbl_blog')->where('blog_id', $blog_id)->update(['blog_status'=>1]);
        Session::put('message', 'Hiện bài viết thành công');
        return Redirect::to('all-blog');
    }

    public function active_blog($blog_id)
    {
        DB::table('tbl_blog')->where('blog_id', $blog_id)->update(['blog_status'=>0]);
        Session::put('message', 'Ẩn bài viết thành công');
        return Redirect::to('all-blog');
    }

    public function edit_blog($blog_id)
    {
        $edit_blog = DB::table('tbl_blog')->where('blog_id', $blog_id)->get();
        $manager_blog = view('blog.edit-blog')->with('edit_blog', $edit_blog);
        return view('admin')->with('edit_blog',$manager_blog);
    }
     public function delete_blog($blog_id)//copy từ hàm all_category_product rồi sửa    
    {
        DB::table('tbl_blog')->where('blog_id', $blog_id)->delete();
        Session::put('message', 'Xóa bài viết thành công');
        return Redirect::to('all-blog');
    }

    public function update_blog(Request $request, $blog_id)
    {
        $data = array();//khai báo biến data là chuỗi array
        $data['blog_name'] = $request->blog_name;     //lấy dữ liệu theo biến name gửi qua name bên sql
        $data['blog_quote'] = $request->blog_quote;
        $data['blog_content1'] = $request->blog_content1;
        $data['blog_content2'] = $request->blog_content2;
        $data['blog_content3'] = $request->blog_content3;
        //vì file ảnh không thể lưu trong database, nên phải lưu ở file source
        $get_image = $request -> file('blog_image');
        
        if($get_image)
        {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = rand(0,99).'.'.$get_image->getClientOriginalExtension();//hàm getClient... này lấy đuôi mở rộng VD:.jpg, .png,...
            $get_image->move('uploads/blog', $new_image);//di chuyển ảnh vào trong file đã tạo tự động trong public
            $data['blog_image'] = $new_image;
            DB::table('tbl_blog')->where('blog_id', $blog_id)->update($data);
            Session::put('message', 'Cập nhật bài viết thành công');//sau khi thêm thành công hiển thị message thông báo
            return Redirect::to('all-blog');
        }
        DB::table('tbl_blog')->where('blog_id', $blog_id)->update($data);
        Session::put('message', 'Cập nhật bài viết thành công');//sau khi thêm thành công hiển thị message thông báo
        return Redirect::to('all-blog');

    }

	public function login()
    {
        return true;
    }
}
