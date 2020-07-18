<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() 
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('id','desc')->get();// lấy ra category product để hiển thị vào combobox
        $all_product = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->limit(4)->get();
        $on_sale_product = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->limit(3)->get();
        $seen_product = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','asc')->limit(3)->get();
        $all_pro = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->get();
        $all_blog = DB::table('tbl_blog')->where('blog_status','1')->orderby('blog_id','desc')->limit(3)->get();
        return view('home')->with('category', $cate_product)->with('all_product', $all_product)->with('on_sale_product', $on_sale_product)->with('seen_product', $seen_product)->with('all_blog', $all_blog)->with('all_pro', $all_pro);
    }
}
