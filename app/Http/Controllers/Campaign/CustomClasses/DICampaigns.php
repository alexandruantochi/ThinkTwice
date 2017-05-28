<?php
/**
 * Created by PhpStorm.
 * User: EL Diesel
 * Date: 28.05.2017
 * Time: 15:09
 */
namespace App\Http\Controllers\Campaign\CustomClasses;

use Illuminate\Support\Facades\DB;

final class DICampaigns {

    public $campaign_categories = array('animals', 'environment', 'humanitarian', 'health', 'economic justice', 'social responsability', 'civil rights');

    public function getStats($user_id) {

        $subQuery = DB::table('campaign_subs')
            ->where('user_id', '=', "{$user_id}")
            ->selectRaw('campaign_id');

        $stats = DB::table(DB::raw("({$subQuery->toSql()}) as subQuery"))
            ->mergeBindings($subQuery)
            ->join('campaigns', 'campaigns.id', '=', 'subQuery.campaign_id')
            ->groupBy('campaigns.category')
            ->orderBy('count', 'desc')
            ->selectRaw('COUNT(*) count, campaigns.category')
            ->get();

        return $stats;

    }

    public function getResultByCategory($category) {

        $result = DB::table('campaigns')
                            ->where('category', '=', $category)
                            ->inRandomOrder()
                            ->first();

        return $result;

    }

}

?>