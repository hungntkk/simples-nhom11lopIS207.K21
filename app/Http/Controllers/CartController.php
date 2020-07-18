<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;
use Cart;	
session_start();

class CartController extends Controller
{
    public function save_cart(Request $request)
    {
    	$cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('id','desc')->get();
    	$productId = $request->product_id_hidden;
    	$quantity=$request->qty;
        $product_info = DB::table('tbl_product')->where('product_id', $productId)->first();// lấy ra category product để hiển thị vào combobox

       	// Cart::add('293ad', 'Product 1', 1, 9.99, 550);
       	// Cart::destroy();
       	$data['id']=$product_info->product_id;
       	$data['qty']=$quantity;
       	$data['name']=$product_info->product_name;
       	$data['price']=$product_info->product_price;
       	$data['weight']='1';
       	$data['options']['image']=$product_info->product_image;
       	Cart::add($data);
       	// Cart::destroy();
        return Redirect::to('/show-cart');
    }

    public function them_cart(Request $request)
    {
      $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('id','desc')->get();
      $productId = $request->product_id_hidden;
      $quantity=$request->qty;
        $product_info = DB::table('tbl_product')->where('product_id', $productId)->first();// lấy ra category product để hiển thị vào combobox

        // Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        // Cart::destroy();
        $data['id']=$product_info->product_id;
        $data['qty']=$quantity;
        $data['name']=$product_info->product_name;
        $data['price']=$product_info->product_price;
        $data['weight']='1';
        $data['options']['image']=$product_info->product_image;
        Cart::add($data);
        // Cart::destroy();
        return Redirect::to('/');
    }

     public function them_cart_1(Request $request)
    {
      $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('id','desc')->get();
      $productId = $request->product_id_hidden;
      $quantity=$request->quant[1];
        $product_info = DB::table('tbl_product')->where('product_id', $productId)->first();// lấy ra category product để hiển thị vào combobox

        // Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        // Cart::destroy();
        $data['id']=$product_info->product_id;
        $data['qty']=$quantity;
        $data['name']=$product_info->product_name;
        $data['price']=$product_info->product_price;
        $data['weight']='1';
        $data['options']['image']=$product_info->product_image;
        Cart::add($data);
        // Cart::destroy();
        return Redirect::to('/');
    }

    public function them_cart_shop(Request $request)
    {
      $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('id','desc')->get();
      $productId = $request->product_id_hidden;
      $quantity=$request->qty;
        $product_info = DB::table('tbl_product')->where('product_id', $productId)->first();// lấy ra category product để hiển thị vào combobox

        // Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        // Cart::destroy();
        $data['id']=$product_info->product_id;
        $data['qty']=$quantity;
        $data['name']=$product_info->product_name;
        $data['price']=$product_info->product_price;
        $data['weight']='1';
        $data['options']['image']=$product_info->product_image;
        Cart::add($data);
        // Cart::destroy();
        return Redirect::to('/shop');
    }

    public function show_cart()
    {
    	$cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('id','desc')->get();
      return view('cart.show-cart')->with('category', $cate_product);
    }

    public function delete_to_cart($rowId)
    {
    	Cart::update($rowId, 0);
      return Redirect::to('/show-cart');
    }
    public function delete_to_cart_shop($rowId)
    {
      Cart::update($rowId, 0);
      return Redirect::to('/shop');
    }

    public function delete_to_cart_index($rowId)
    {
      Cart::update($rowId, 0);
      return Redirect::to('/');
    }

    public function update_cart_quantity(Request $request)
    {
    	$rowId = $request->rowId_cart;
    	$qty=$request->cart_quantity;
    	Cart::update($rowId, $qty);
      return Redirect::to('/show-cart');
    }
}
