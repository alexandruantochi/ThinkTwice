<?php

namespace App\Http\Controllers\Campaign;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CampaignSubscriptionController extends Controller
{
    function subscribe ($id) {

    DB::table('campaign_subs')
        ->insert(['user_id' => Auth::id(), 'campaign_id' => $id, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);

    return back();

}

    function unsubscribe ($id) {

        DB::table('campaign_subs')
            ->whereRaw('campaign_subs.user_id = ' . Auth::id() . ' AND campaign_subs.campaign_id = ' . $id)
            ->delete();

        return back();

    }
}
