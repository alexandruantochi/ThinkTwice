<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products_assosiative_array= array(
            "food"=>"Food",
            "beauty"=>"Beauty",
            "personal_care"=>"Personal Care",
            "entertainment"=>"Entertainment",
            "clothing"=>"Clothing",
            "electronics"=>"Electronics"
        );
        return view('products.products')->with('products_assosiative_array',$products_assosiative_array);
    }
}
