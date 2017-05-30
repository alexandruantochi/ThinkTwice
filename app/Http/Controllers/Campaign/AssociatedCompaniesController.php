<?php

namespace App\Http\Controllers\Campaign;

use App\Http\Controllers\Campaign\CustomClasses\CampaignConfigurations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AssociatedCompaniesController extends Controller
{
    function companiesAgainst ($id) {

        $campaign_name = DB::table('campaigns')
                                ->where('id', '=', $id)
                                ->get();

        $companies_against = DB::table('agn_campaigns')
                                ->join('companies', 'agn_campaigns.company_id', '=', 'companies.id')
                                ->where('agn_campaigns.campaign_id', '=', $id)
                                ->paginate(CampaignConfigurations::get_Instance()->num_results_page);

        $title = $campaign_name[0]->name . ": Companies Against";
        $sub_title = "";
        $type_of_count = "";
        $entity_type = "companies";

        return view('campaigns.campaignBrowser')->with('entities', $companies_against)
            ->with('title', $title)
            ->with('sub_title', $sub_title)
            ->with('type_of_count', $type_of_count)
            ->with('entity_type', $entity_type);

    }

    function companiesSupported ($id) {

        $campaign_name = DB::table('campaigns')
                                ->where('id', '=', $id)
                                ->get();

        $companies_supported = DB::table('sup_campaigns')
                                ->join('companies', 'sup_campaigns.company_id', '=', 'companies.id')
                                ->where('sup_campaigns.campaign_id', '=', $id)
                                ->paginate(CampaignConfigurations::get_Instance()->num_results_page);

        $title = $campaign_name[0]->name . ": Companies Supported";
        $sub_title = "";
        $type_of_count = "";
        $entity_type = "companies";

        return view('campaigns.campaignBrowser')->with('entities', $companies_supported)
            ->with('title', $title)
            ->with('sub_title', $sub_title)
            ->with('type_of_count', $type_of_count)
            ->with('entity_type', $entity_type);

    }
}
