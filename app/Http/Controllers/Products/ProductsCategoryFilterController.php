<?php

namespace App\Http\Controllers\Products;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductReviews;


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

        $company_name=DB::table('companies')->where('products.id',$id)
            ->select(DB::raw('companies.name as c_name'))
            ->join('products', 'products.company_id', '=', 'companies.id')
            ->first();

        //checking error, incomplet, daca vreti voi sa duceti la capat aplicatia, rezolvati joinul asta

        $user_id=Auth::id();

        $count=DB::table('users')
            ->join('campaign_subs','campaign_subs.user_id','=','users.id')
            ->join('agn_campaigns','agn_campaigns.campaign_id','=','campaign_subs.campaign_id')
            ->join('companies','agn_campaigns.company_id','=','companies.id')
            ->where('companies.name',$company_name)
            ->where('users.id',$user_id)
            ->count();

        if($count!=0)
        {
            return view('profile\edit\error2');
        }
        else {

            $substances = DB::table('products')->where('products.id', $id)
                ->join('product_substance', 'product_substance.product_id', '=', 'products.id')
                ->join('substances', 'substances.id', '=', 'product_substance.substance_id')
                ->orderBy('substances.name', 'asc')->get();

            $averageRating = DB::table('products')->where('products.id', $id)
                ->select(DB::raw('avg(product_reviews.product_rating) as p_rate'))
                ->join('product_reviews', 'product_reviews.product_id', '=', 'products.id')
                ->first();
            if ($averageRating->p_rate == null) $averageRating->p_rate = 0;

            $productReviews = DB::table('product_reviews')->where('product_reviews.product_id', $id)
                ->select(DB::raw(' users.name as u_name,product_reviews.review as review,product_reviews.product_rating as p_rate'))
                ->join('users', 'users.id', '=', 'product_reviews.user_id')
                ->get();

            return view('products/productProfile', array('product' => $product, 'substances' => $substances, 'company_name' => $company_name, 'productReviews' => $productReviews, 'averageRating' => $averageRating));//compact('product'));
            //array('product'=>$product,'substances'=>$substances));
        }
    }
}
