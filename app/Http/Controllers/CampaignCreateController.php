<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignCreateController extends Controller
{
    function index() {


        return view('campaigns.campaignCreate');
    }
}
