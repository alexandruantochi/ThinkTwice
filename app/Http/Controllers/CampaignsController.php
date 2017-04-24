<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignsController extends Controller
{
    function index(){

        $default_campaigns = array(
            1 => "Save Bees",
            2 => "Against Pollution",
            3 => "Against Global Warming",
            4 => "Say no to child labour",
            5 => "Stop ocean pollution",
            6 => "Stop deforestation"
        );

        return view('campaigns.campaigns')->with('default_campaigns', $default_campaigns);
    }
}
