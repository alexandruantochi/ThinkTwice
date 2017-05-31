<?php

namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class MainPageController extends Controller
{
    public function home()
    {

        $subQuery = DB::table('campaign_subs')
            ->groupBy('campaign_id')
            ->orderBy('count', 'desc')
            ->selectRaw('count(*) count, campaign_id');

        $popular_campaigns = DB::table(DB::raw("({$subQuery->toSql()}) as subQuery"))
            ->mergeBindings($subQuery)
            ->join('campaigns', 'campaigns.id', '=', 'subQuery.campaign_id')
            ->orderBy('subQuery.count', 'desc')
            ->selectRaw('subQuery.count, campaigns.*')
            ->paginate(3);

        $newest_companies=DB::table('companies')
            ->orderby('created_at','desc')
            ->paginate(4);



        return view('home')
            ->with('popular_campaigns',$popular_campaigns)
            ->with('newest_companies',$newest_companies);
        //return $popular_campaigns;
        //return $newest_companies;
    }
}
