<?php

namespace App\Http\Controllers\Campaign;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Campaign\CustomClasses\CampaignConfigurations;

class CampaignBrowserController extends Controller
{
    function index(){

        $default_campaigns = DB::table('campaigns')
            ->inRandomOrder()
            ->take(CampaignConfigurations::get_Instance()->num_default_results)
            ->get();

        //return view('campaigns.campaigns')->with('default_campaigns', $default_campaigns);
        return $default_campaigns;

    }

}

