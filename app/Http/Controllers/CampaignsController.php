<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignsController extends Controller
{
    function index(){


        return view('campaigns.campaigns');
    }
}
