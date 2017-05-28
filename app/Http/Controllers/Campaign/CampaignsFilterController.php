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
                return view('errors.badRequest');

        }
    }

    function byName(Request $request) {

        //echo $request->get('name');

        $results = DB::table('campaigns')
                        ->where('name', 'like', "%{$request->get('name')}%")
                        ->orderBy('name', 'desc')
                        ->paginate(CampaignConfigurations::get_Instance()->num_results_page);

        return $results;

    }

    function byCategory(Request $request) {

        $results = DB::table('campaigns')
                        ->where('category', 'like', "%{$request->get('name')}%")
                        ->orderBy('name', 'desc')
                        ->paginate(CampaignConfigurations::get_Instance()->num_results_page);

        return $results;

    }

    function byOrganizer(Request $request) {

        $results = DB::table('users')
                            ->where('users.name', 'like', "%{$request->get('name')}%")
                            ->join('campaigns', 'campaigns.organizer_id', '=', 'users.id')
                            ->orderBy('organizer_name', 'asc')
                            ->selectRaw('users.name organizer_name, campaigns.*')
                            ->paginate(CampaignConfigurations::get_Instance()->num_results_page);

        return $results;

    }

}
