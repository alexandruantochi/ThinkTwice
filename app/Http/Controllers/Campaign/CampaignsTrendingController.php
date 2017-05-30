<?php

namespace App\Http\Controllers\Campaign;

use App\Http\Controllers\Campaign\CustomClasses\CampaignConfigurations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CampaignsTrendingController extends Controller
{
    function index() {

        $date = time() - CampaignConfigurations::get_Instance()->default_trending_period;
        $date = date('Y-m-d H:i:s', $date);

        $subQuery = DB::table('campaign_subs')
                        ->where('created_at', '>', "{$date}")
                        ->groupBy('campaign_id')
                        ->orderBy('count', 'desc')
                        ->selectRaw('count(*) count, campaign_id');

        $trending_campaigns = DB::table(DB::raw("({$subQuery->toSql()}) as subQuery"))
                                        ->mergeBindings($subQuery)
                                        ->join('campaigns', 'campaigns.id', '=', 'subQuery.campaign_id')
                                        ->orderBy('subQuery.count', 'desc')
                                        ->selectRaw('subQuery.count, campaigns.*')
                                        ->paginate(CampaignConfigurations::get_Instance()->num_results_page);

        $title = "Trending";
        $sub_title = "The Trending Count Represents How Many Users Subscribed To The Campaign In The Last Week";
        $type_of_count = "Trending Count: ";
        $entity_type = "campaigns";

        return view('campaigns.campaignBrowser')->with('entities', $trending_campaigns)
            ->with('title', $title)
            ->with('sub_title', $sub_title)
            ->with('type_of_count', $type_of_count)
            ->with('entity_type', $entity_type);;

    }
}
