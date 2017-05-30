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

        $categories_pie=DB::table('products')
            ->select(DB::raw('category,count(*) as number'))
            ->groupBy('category')
            ->get();

        $product_rating=DB::table('product_reviews')
            ->select(DB::raw('product_rating,count(*) as number'))
            ->groupBy('product_rating')
            ->get();

        $bestFiveProducts=DB::table('products')->where('product_reviews.product_rating',5)
            ->select(DB::raw('products.name as p_name,products.id as p_id,product_reviews.product_rating as p_rate'))
            ->join('product_reviews', 'product_reviews.product_id', '=', 'products.id')
            ->get();

        return view('products.products',array('categories'=>$categories,'products'=>$products,'categories_pie'=>$categories_pie,'product_rating'=>$product_rating,'bestFiveProducts'=>$bestFiveProducts));
    }
}
