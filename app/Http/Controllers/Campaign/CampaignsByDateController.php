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
                                ->selectRaw('created_at count, campaigns.*')
                                ->paginate(CampaignConfigurations::get_Instance()->num_results_page);

        $title = "By Date";
        $sub_title = "";
        $type_of_count = "Created At: ";
        $entity_type = "campaigns";

        return view('campaigns.campaignBrowser')->with('entities', $byDate_campaigns)
            ->with('title', $title)
            ->with('sub_title', $sub_title)
            ->with('type_of_count', $type_of_count)
            ->with('entity_type', $entity_type);

    }
}
