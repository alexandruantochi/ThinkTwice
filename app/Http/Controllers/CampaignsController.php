<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignsController extends Controller
{
    function index(){

        $default_campaigns = array(1,2,3,4,5,6);

        return view('campaigns.campaigns')->with('default_campaigns', $default_campaigns);
    }
}
