<?php

namespace App\Http\Controllers\Campaign;

use App\Http\Controllers\Campaign\CustomClasses\CampaignConfigurations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CampaignsByDateController extends Controller
{
    function index() {

        $byDate_campaigns = DB::table('campaigns')
                                ->orderBy('created_at', 'desc')
                                ->paginate(CampaignConfigurations::get_Instance()->num_results_page);

        return $byDate_campaigns;

    }
}
