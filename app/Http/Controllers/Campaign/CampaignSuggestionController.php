<?php

namespace App\Http\Controllers\Campaign;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Campaign\CustomClasses\CampaignConfigurations;
use App\Http\Controllers\Campaign\CustomClasses\DICampaigns;
use App\Http\Controllers\Campaign\CustomClasses\SuggestionsAlg;
use Illuminate\Support\Facades\Auth;

class CampaignSuggestionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function index() {

        $DICampaigns = new DICampaigns();

        $suggestions = new SuggestionsAlg($DICampaigns, $DICampaigns->campaign_categories);

        $results = $suggestions->makeSuggstions(Auth::id(), CampaignConfigurations::get_Instance()->default_number_of_suggestions);

        return view('campaigns.campaignSuggestions')->with('suggested_campaigns', $results);

    }
}
