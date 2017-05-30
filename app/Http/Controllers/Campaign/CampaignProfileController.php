<?php

namespace App\Http\Controllers\Campaign;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

        $is_authenticated = Auth::check();
        $already_subscribed = null;

        if($is_authenticated) {
            $already_subscribed = DB::table('campaign_subs')
                ->whereRaw('campaign_subs.user_id = ' . Auth::id() . ' AND campaign_subs.campaign_id = ' . $id)
                ->selectRaw('COUNT(*) count')
                ->get();
        }

        return view('campaigns.campaignProfile')
            ->with('entity', $campaign[0])
            ->with('organizer', $organizer[0])
            ->with('count_companies_against', $count_companies_against[0])
            ->with('count_companies_support', $count_companies_support[0])
            ->with('is_authenticated', $is_authenticated)
            ->with('is_already_subscribed', $already_subscribed[0]);

    }
}
