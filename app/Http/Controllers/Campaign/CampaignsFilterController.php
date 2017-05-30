<?php

namespace App\Http\Controllers\Campaign;

use App\Http\Controllers\Campaign\CustomClasses\CampaignConfigurations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CampaignsFilterController extends Controller
{
    function index(Request $request) {
        
        switch($request->get('option')) {

            case "byName" :
                return $this->byName($request);
            case "byCategory" :
                return $this->byCategory($request);
            case "byOrganizer" :
                return $this->byOrganizer($request);
            default :
                return redirect('/campaigns');

        }
    }

    function byName(Request $request) {

        $results = DB::table('campaigns')
                        ->where('name', 'like', "%{$request->get('name')}%")
                        ->orderBy('name', 'desc')
                        ->paginate(CampaignConfigurations::get_Instance()->num_results_page);

        $title = "By Name";
        $sub_title = "You searched for: " . $request->get('name');
        $type_of_count = "";
        $entity_type = "campaigns";

        return view('campaigns.campaignBrowser')->with('entities', $results)
            ->with('title', $title)
            ->with('sub_title', $sub_title)
            ->with('type_of_count', $type_of_count)
            ->with('entity_type', $entity_type);

    }

    function byCategory(Request $request) {

        $results = DB::table('campaigns')
                        ->where('category', 'like', "%{$request->get('name')}%")
                        ->orderBy('name', 'desc')
                        ->selectRaw('campaigns.category count, campaigns.*')
                        ->paginate(CampaignConfigurations::get_Instance()->num_results_page);

        $title = "By Category";
        $sub_title = "You searched for: " . $request->get('name');
        $type_of_count = "Category: ";
        $entity_type = "campaigns";

        return view('campaigns.campaignBrowser')->with('entities', $results)
            ->with('title', $title)
            ->with('sub_title', $sub_title)
            ->with('type_of_count', $type_of_count)
            ->with('entity_type', $entity_type);

    }

    function byOrganizer(Request $request) {

        $results = DB::table('users')
                            ->where('users.name', 'like', "%{$request->get('name')}%")
                            ->join('campaigns', 'campaigns.organizer_id', '=', 'users.id')
                            ->orderBy('count', 'asc')
                            ->selectRaw('users.name count, campaigns.*')
                            ->paginate(CampaignConfigurations::get_Instance()->num_results_page);

        $title = "By Organizer";
        $sub_title = "You searched for: " . $request->get('name');
        $type_of_count = "Organizer: ";
        $entity_type = "campaigns";

        return view('campaigns.campaignBrowser')->with('entities', $results)
            ->with('title', $title)
            ->with('sub_title', $sub_title)
            ->with('type_of_count', $type_of_count)
            ->with('entity_type', $entity_type);

    }

}
