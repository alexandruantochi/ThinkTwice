<?php

namespace App\Http\Controllers\Campaign;

use App\Http\Controllers\Campaign\CustomClasses\CampaignConfigurations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CampaignsPopularityController extends Controller
{
    function index() {

        $subQuery = DB::table('campaign_subs')
                            ->groupBy('campaign_id')
                            ->orderBy('count', 'desc')
                            ->selectRaw('count(*) count, campaign_id');

        $popular_campaigns = DB::table(DB::raw("({$subQuery->toSql()}) as subQuery"))
                                ->mergeBindings($subQuery)
                                ->join('campaigns', 'campaigns.id', '=', 'subQuery.campaign_id')
                                ->orderBy('subQuery.count', 'desc')
                                ->selectRaw('subQuery.count, campaigns.*')
                                ->paginate(CampaignConfigurations::get_Instance()->num_results_page);

        $title = "Popularity";
        $sub_title = "";
        $type_of_count = "Popularity count: ";
        $entity_type = "campaigns";

        return view('campaigns.campaignBrowser')->with('entities', $popular_campaigns)
            ->with('title', $title)
            ->with('sub_title', $sub_title)
            ->with('type_of_count', $type_of_count)
            ->with('entity_type', $entity_type);

    }
}
