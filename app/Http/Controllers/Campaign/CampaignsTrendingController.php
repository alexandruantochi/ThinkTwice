<?php

namespace App\Http\Controllers\Campaign;

use App\Http\Controllers\Campaign\CustomClasses\CampaignConfigurations;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CampaignsTrendingController extends Controller
{
    function index() {

        $date = Carbon::now();
        $date = $date->subHours(CampaignConfigurations::get_Instance()->default_trending_period);

        $subQuery = DB::table('campaign_subs')
                        ->where('created_at', '>', "{$date->toDateTimeString()}")
                        ->groupBy('campaign_id')
                        ->orderBy('count', 'desc')
                        ->selectRaw('count(*) count, campaign_id');

        $trending_campaigns = DB::table(DB::raw("({$subQuery->toSql()}) as subQuery"))
                                        ->mergeBindings($subQuery)
                                        ->join('campaigns', 'campaigns.id', '=', 'subQuery.campaign_id')
                                        ->orderBy('subQuery.count', 'desc')
                                        ->selectRaw('subQuery.count, campaigns.*')
                                        ->paginate(CampaignConfigurations::get_Instance()->num_results_page);

        return $trending_campaigns;

    }
}
