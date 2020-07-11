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
        return view('index')->with('category', $cate_product)->with('all_product', $all_product);
    }
     public function register()
    {
        return view('register');
    }
}
