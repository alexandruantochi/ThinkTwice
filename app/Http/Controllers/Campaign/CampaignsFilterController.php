<?php

namespace App\Http\Controllers\Campaign;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CampaignsFilterController extends Controller
{
    function byName(Request $request) {

        //echo $request->get('name');

        $results = DB::table('campaigns')
                        ->where('name', 'like', "%{$request->get('name')}%")
                        ->orderBy('name', 'desc')
                        ->get();

        return $results;

    }

    function byCategory(Request $request) {

        $results = DB::table('campaigns')
                        ->where('category', 'like', "%{$request->get('category')}%")
                        ->orderBy('name', 'desc')
                        ->get();

        return $results;

    }

    function byOrganizer(Request $request) {

        $results = DB::table('users')
                            ->where('users.name', 'like', "%{$request->get('organizer')}%")
                            ->join('campaigns', 'campaigns.organizer_id', '=', 'users.id')
                            ->orderBy('organizer_name', 'asc')
                            ->selectRaw('users.name organizer_name, campaigns.*')
                            ->get();

        return $results;

    }

}
