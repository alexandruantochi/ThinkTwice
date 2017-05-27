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
                            ->join('campaigns', 'campaigns.id', '=', 'campaign_subs.campaign_id')
                            ->groupBy('campaigns.id')
                            ->orderBy('count', 'desc')
                            ->selectRaw('count(*) count, campaigns.id');

        $popular_campaigns = DB::table(DB::raw("({$subQuery->toSql()}) as subQuery"))
                                ->mergeBindings($subQuery)
                                ->join('campaigns', 'campaigns.id', '=', 'subQuery.id')
                                ->paginate(CampaignConfigurations::get_Instance()->num_results_page);

        return $popular_campaigns;
    }
}
