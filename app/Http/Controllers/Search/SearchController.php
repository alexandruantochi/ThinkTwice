<?php

namespace App\Http\Controllers\Search;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    function index(Request $request) {

        switch($request->get('option')) {

            case "upc" :
                return $this->upc($request);
            case "p_name" :
                return $this->product_name($request);
            case "cg_name" :
                return $this->campaign_name($request);
            case "cp_name" :
                return $this->campany_name($request);
            default :
                return redirect('/home');
        }
    }

    function upc(Request $request){
            $title = "Products searched by UPC founded: ";
            $sub_title = "You searched for: " . $request->get('name');
            $count=DB::table('products')
                ->where('UPC','like',"%{$request->get('name')}%")
                ->select(DB::raw('count(*) as number'))
                ->first();
            $route="/products/profile/";
            $image="images/products/";
            $results=DB::table('products')->where('UPC','like',"%{$request->get('name')}%")
                                        ->get();

        return view('search.search')->with('results',$results)
            ->with('title',$title)
            ->with('sub_title',$sub_title)
            ->with('count',$count)
            ->with('route',$route)
            ->with('image',$image);
        //return $results;
    }

    function product_name(Request $request){

        $title = "Products searched by name founded:";
        $sub_title = "You searched for: " . $request->get('name');
        $results=DB::table('products')->where('name','like',"%{$request->get('name')}%")
            ->get();
        $count=DB::table('products')
            ->where('name','like',"%{$request->get('name')}%")
            ->select(DB::raw('count(*) as number'))
            ->first();
        $route="/products/profile/";
        $image="images/products/";
        return view('search.search')->with('results',$results)
            ->with('title',$title)
            ->with('sub_title',$sub_title)
            ->with('count',$count)
            ->with('route',$route)
            ->with('image',$image);
        //return $results;
    }

    function campaign_name(Request $request){

        $title = "Campaigns searched by name founded:";
        $sub_title = "You searched for: " . $request->get('name');
        $results=DB::table('campaigns')->where('name','like',"%{$request->get('name')}%")
            ->get();
        $count=DB::table('campaigns')
            ->where('name','like',"%{$request->get('name')}%")
            ->select(DB::raw('count(*) as number'))
            ->first();
        $route="/campaigns/";
        $image="images/campaigns/";

        return view('search.search')->with('results',$results)
            ->with('title',$title)
            ->with('sub_title',$sub_title)
            ->with('count',$count)
            ->with('route',$route)
            ->with('image',$image);
        //return $results;
    }

    function campany_name(Request $request){

        $title = "Companies searched by name founded:";
        $sub_title = "You searched for: " . $request->get('name');
        $results=DB::table('companies')->where('name','like',"%{$request->get('name')}%")
            ->get();
        $count=DB::table('campaigns')
            ->where('name','like',"%{$request->get('name')}%")
            ->select(DB::raw('count(*) as number'))
            ->first();
        $route="/companies/profile/";
        $image="images/companies/";
        return view('search.search')->with('results',$results)
            ->with('title',$title)
            ->with('sub_title',$sub_title)
            ->with('count',$count)
            ->with('route',$route)
            ->with('image',$image);
        //return $results;
    }
}
