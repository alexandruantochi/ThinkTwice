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

        return view('campaigns.campaignBrowser')->with('campaigns', $popular_campaigns);

    }
}
