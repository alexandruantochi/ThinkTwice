<?php

namespace App\Http\Controllers\Products;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Product;


class ProductsCategoryFilterController extends Controller
{
    public function displayProductsCategory($categoryName)
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
    public function displayProductProfile($id){

        $product=DB::table('products')->where('id',$id)->first();
        $substances=DB::table('products')->where('products.id',$id)
            ->join('product_substance', 'product_substance.product_id', '=', 'products.id')
            ->join('substances', 'substances.id', '=', 'product_substance.substance_id')
            ->orderBy('substances.name', 'asc')->get();
        return view('products/productProfile', array('product'=>$product,'substances'=>$substances));//compact('product'));
        //array('product'=>$product,'substances'=>$substances));
    }

}
