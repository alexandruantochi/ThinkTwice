<?php

namespace App\Http\Controllers\Campaign;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CampaignCreateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index() {

        return view('campaigns.campaignCreate');

    }

    function saveCampaign(Request $request) {

        $campaign_id = DB::table('campaigns_pending')
                ->insertGetId(['name' => $request->get('name'), 'description' => $request->get('description'), 'category' => $request->get('category'),
                    'organizer_id' => Auth::id(), 'number_of_power_user_approves' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);

        if ($request->hasFile('logo')) {
            if ($request->file('logo')->getMimeType() != 'image/jpeg') {
                return view('errors.default')->with(['error' => ['message' => 'Bad file extension. Only pictures accepted.']]);
            }
            $logo = $request->file('logo');
            $logo->storeAs("images/campaigns/pending/" . $campaign_id . 'logo.png');
        }

        $error['message']='Campaign saved. Thanks!';
        return view('errors.default', compact('error'));

    }
}
