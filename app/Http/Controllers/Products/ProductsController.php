<?php

namespace App\Http\Controllers\Products;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        $categories=DB::table('products')->distinct()->pluck('category');
        $products=DB::table('products')->pluck('id','name');
        $product_price=DB::table('products')->pluck('id','price');

        return view('products.products',array('categories'=>$categories,'products'=>$products,'product_price'=>$product_price));
    }
}
