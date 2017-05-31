<?php

namespace App\Http\Controllers;

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

        return view('profile\profile')
            ->with ('name',$name)
            ->with ('age',$age)
            ->with ('gender',$gender)
            ->with ('location',$location)
            ->with ('occupation',$occupation);
    }
}
