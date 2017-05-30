<?php

namespace App\Http\Controllers\Campaign;

use App\Http\Controllers\Campaign\CustomClasses\CampaignConfigurations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CampaignSubscriptionController extends Controller
{
    function subscribe ($id) {

    DB::table('campaign_subs')
        ->insert(['user_id' => Auth::id(), 'campaign_id' => $id, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);

    return back();

    }

    function unsubscribe ($id) {

        DB::table('campaign_subs')
            ->whereRaw('campaign_subs.user_id = ' . Auth::id() . ' AND campaign_subs.campaign_id = ' . $id)
            ->delete();

        return back();

    }

    function getMySubs() {

        $this->middleware('auth');

        $subs = DB::table('campaign_subs')
                        ->join('campaigns', 'campaigns.id', '=', 'campaign_subs.campaign_id')
                        ->where('campaign_subs.user_id', '=', Auth::id())
                        ->paginate(CampaignConfigurations::get_Instance()->num_results_page);

        $title = "My Subscriptions";
        $sub_title = "";
        $type_of_count = "";
        $entity_type = "campaigns";

        return view('campaigns.campaignBrowser')->with('entities', $subs)
            ->with('title', $title)
            ->with('sub_title', $sub_title)
            ->with('type_of_count', $type_of_count)
            ->with('entity_type', $entity_type);

    }

}
