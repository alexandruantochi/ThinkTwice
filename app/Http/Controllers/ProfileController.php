<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Campaign\CustomClasses\CampaignConfigurations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class ProfileController extends Controller
{

    public function showprofile()
    {
        $this->middleware('auth');



        $name=DB::table('users') ->where ('users.id', '=', Auth::id())->value('name');
        $age=DB::table('users') ->where ('users.id', '=', Auth::id())->value('date_of_birth');
        $gender=DB::table('users') ->where ('users.id', '=', Auth::id())->value('gender');
        $location=DB::table('users') ->where ('users.id', '=', Auth::id())->value('location');
        $occupation=DB::table('users') ->where ('users.id', '=', Auth::id())->value('occupation');

        if($age==NULL)
            $age='Not speciffied';
        if($gender==NULL)
            $gender='Not speciffied';
        if($location==NULL)
            $location='Not speciffied';
        if($occupation==NULL)
            $occupation='Not speciffied';

        $entity_type = "campaigns";
        $type_of_count = "";

        $subs = DB::table('campaign_subs')
            ->join('campaigns', 'campaigns.id', '=', 'campaign_subs.campaign_id')
            ->where('campaign_subs.user_id', '=', Auth::id())
            ->paginate(CampaignConfigurations::get_Instance()->num_results_page);

        return view('profile.profile')->with('entities', $subs)
            ->with('userid',Auth::id())
            ->with('entity_type',$entity_type)
            ->with('type_of_count',$type_of_count)
            ->with ('name',$name)
            ->with ('age',$age)
            ->with ('gender',$gender)
            ->with ('location',$location)
            ->with ('occupation',$occupation);
    }
}
