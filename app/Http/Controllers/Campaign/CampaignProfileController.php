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

        $count_companies_against = DB::table('agn_campaigns')
                                        ->selectRaw('COUNT(*) count')
                                        ->where('agn_campaigns.campaign_id', '=', $id)
                                        ->get();
        $count_companies_support = DB::table('sup_campaigns')
                                        ->selectRaw('COUNT(*) count')
                                        ->where('sup_campaigns.campaign_id', '=', $id)
                                        ->get();

        return view('campaigns.campaignProfile')
            ->with('entity', $campaign[0])
            ->with('organizer', $organizer[0])
            ->with('count_companies_against', $count_companies_against[0])
            ->with('count_companies_support', $count_companies_support[0]);

    }
}
