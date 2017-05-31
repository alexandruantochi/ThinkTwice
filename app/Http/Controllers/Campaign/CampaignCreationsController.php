<?php

namespace App\Http\Controllers\Campaign;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Campaign\CustomClasses\CampaignConfigurations;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CampaignCreationsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function finalizedCreations() {

        $accepted = DB::table('campaigns')
            ->where('campaigns.organizer_id', '=', Auth::id())
            ->paginate(CampaignConfigurations::get_Instance()->num_results_page);

        $title = "My Finalized Creations";
        $sub_title = "";
        $type_of_count = "";
        $entity_type = "campaigns";

        return view('campaigns.campaignBrowser')->with('entities', $accepted)
            ->with('title', $title)
            ->with('sub_title', $sub_title)
            ->with('type_of_count', $type_of_count)
            ->with('entity_type', $entity_type);

    }

    function pendingCreations() {

        $pending = DB::table('campaigns_pending')
            ->leftjoin('campaigns', 'campaigns.name', '=', 'campaigns_pending.name')
            ->whereRaw('campaigns_pending.organizer_id = ' . Auth::id() . ' AND campaigns.organizer_id IS NULL')
            ->selectRaw('campaigns_pending.*')
            ->paginate(CampaignConfigurations::get_Instance()->num_results_page);



        $title = "My Pending Creations";
        $sub_title = "";
        $type_of_count = "";
        $entity_type = "pending";

        return view('campaigns.campaignBrowser')->with('entities', $pending)
            ->with('title', $title)
            ->with('sub_title', $sub_title)
            ->with('type_of_count', $type_of_count)
            ->with('entity_type', $entity_type);

    }
}
