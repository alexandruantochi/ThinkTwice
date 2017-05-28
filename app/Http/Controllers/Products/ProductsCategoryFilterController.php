<?php

namespace App\Http\Controllers\Products;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Product;


class ProductsCategoryFilterController extends Controller
{
    public function displayProductProfile($categoryName)
    {
        //dd($productName);
        $product=Product::where('category',$categoryName)->get();
        /*$products=Product::all();*///Json
        return view('products/productCategory', compact('product'));
    }
    public function displayAllProducts()
    {
        $products = DB::table('products')->get();
        return view('products/allProducts', compact('products'));
    }

}
