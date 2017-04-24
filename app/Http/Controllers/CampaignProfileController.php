<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignProfileController extends Controller
{
    function index($id) {

        return view('campaignProfile')->with('id', $id);

    }
}
