<?php

namespace App\Http\Controllers\Campaign;

use App\Http\Controllers\Campaign\CustomClasses\CampaignConfigurations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CampaignsPopularityController extends Controller
{
    function index() {

        $popular_campaigns = DB::table('campaigns')
                                    ->join('campaign_subs', 'campaigns.id', '=', 'campaign_subs.campaign_id')
                                    ->groupBy('campaigns.id')
                                    ->orderBy('count', 'desc')
                                    ->selectRaw('count(*) count, campaigns.id')
                                    ->paginate(CampaignConfigurations::get_Instance()->num_results_page);

        return $popular_campaigns;
    }
}
