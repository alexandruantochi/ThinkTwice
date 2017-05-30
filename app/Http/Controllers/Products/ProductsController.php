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

        return view('products.products',array('categories'=>$categories,'products'=>$products,'categories_pie'=>$categories_pie));
    }
}
