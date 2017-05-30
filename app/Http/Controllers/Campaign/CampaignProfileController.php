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

        $organizer = DB::table('users')
                        ->where('id', '=', $campaign[0]->organizer_id)
                        ->get();

        return view('campaigns.campaignProfile')->with('entity', $campaign[0])->with('organizer', $organizer[0]);

    }
}
