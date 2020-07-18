<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start(); 

class IndexController extends Controller
{ 
    public function index()
    { 
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('id','desc')->get();// lấy ra category product để hiển thị vào combobox
        $all_product = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->limit(8)->get();
        $all_pro = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->get();
        $on_sale_product = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->limit(3)->get();
        $seen_product = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','asc')->limit(3)->get();
        $all_blog = DB::table('tbl_blog')->where('blog_status','1')->orderby('blog_id','desc')->limit(3)->get();
        return view('index')->with('category', $cate_product)->with('all_product', $all_product)->with('on_sale_product', $on_sale_product)->with('seen_product', $seen_product)->with('all_blog', $all_blog)->with('all_pro', $all_pro);
    }

    public function show_blog()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('id','desc')->get();
        $show_blog = DB::table('tbl_blog')->where('blog_status','1')->orderby('blog_id','desc')->get();
        $show_blog_2 = DB::table('tbl_blog')->where('blog_status','1')->orderby('blog_id','desc')->limit(1)->get();
        return view('blog.blog')->with('show_blog', $show_blog)->with('show_blog_2', $show_blog_2)->with('category', $cate_product);
    }

    public function lien_he()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('id','desc')->get();
        return view('lien-he')->with('category', $cate_product);
    }

     public function show_blog_by_id($blog_id)
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('id','desc')->get();
        $show_blog = DB::table('tbl_blog')->where('blog_status','1')->orderby('blog_id','desc')->get();
        $show_blog_2 = DB::table('tbl_blog')->where('blog_status','1')->orderby('blog_id','desc')->limit(1)->get();
        $show_blog_by_id = DB::table('tbl_blog')->where('blog_id', $blog_id)->get();
        return view('blog.blog-by-id')->with('show_blog_by_id', $show_blog_by_id)->with('show_blog', $show_blog)->with('category', $cate_product)->with('show_blog_2', $show_blog_2);
    }

    public function register()
    {
        return view('register');
    }
}
