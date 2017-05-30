<?php

namespace App\Http\Controllers\Campaign;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CampaignProfileController extends Controller
{
    function index($id) {

        $campaign = DB::table('campaigns')
                        ->where('id', '=', $id)
                        ->get();

        //dd($campaign);

        return view('campaigns.campaignProfile')->with('entity', $campaign[0]);

    }
}
