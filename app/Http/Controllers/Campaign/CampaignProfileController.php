<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CampaignProfileController extends Controller
{
    function index($id) {

        $campaign = DB::table('campaigns')
                        ->where('id', '=', $id)
                        ->get();

        return $campaign;

    }
}
