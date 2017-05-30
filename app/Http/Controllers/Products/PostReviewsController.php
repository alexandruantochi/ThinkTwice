<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Faker\Factory as Faker;
use App\ProductReviews;

class PostReviewsController extends Controller
{
    public function postCreatePost(Request $request){
        //validation comming soon
        $faker=Faker::create('App\ProductReviews');
        $string="";
        for($i=strlen($request->header('referer'))-1;$i>=strlen($request->header('referer'))-3;$i--)
        {
            if(is_numeric($request->header('referer')[$i]))
            $string=$string.$request->header('referer')[$i];
        }
        $string=strrev($string);
        //dd('products/profile/'.$string);
        $post= new ProductReviews();
        $post->product_id=(int)$string;
        $post->product_rating=$faker->numberBetween(1,5);
        $post->review=$request['new_post'];
        $request->user()->posts()->save($post);//this will save our post as a related post to the curently authentificated user*/

        return redirect("products/profile/".$string);
    }

}
