<?php

namespace App\Http\Controllers;  

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryClientController extends Controller
{
    public function index()
    {	
    	$cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('id','desc')->get();// lấy ra category product để hiển thị vào combobox
        $all_product = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->limit(9)->get();
        return view('product.shop-grid')->with('category', $cate_product)->with('all_product', $all_product);
    }

    public function show_category_home($category_id)
    {	
    	$cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('id','desc')->get();// lấy ra category product để hiển thị vào combobox
       	$category_by_id = DB::table('tbl_product')->join('tbl_category_product','tbl_product.category_id', '=', 'tbl_category_product.id')
       	->where('tbl_product.category_id', $category_id)->get(); 
        return view('product.category-by-id')->with('category', $cate_product)->with('category_by_id', $category_by_id);
    }

    public function details_product($product_id)
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('id','desc')->get();

        $details_product = DB::table('tbl_product')//lấy dữ liệu từ table categoy_product join product truyền vào biến all_category_product
        ->join('tbl_category_product', 'tbl_product.category_id','=', 'tbl_category_product.id')
        ->where('tbl_product.product_id',$product_id)->get(); 
        $all_product = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->limit(9)->get();
        return view('product.details-product')->with('category', $cate_product)->with('details_product', $details_product)
        ->with('all_product', $all_product);
    }
}
