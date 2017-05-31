<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EditformController extends Controller
{
    function save()
    {
        $name=get('name');
        $email=get('email');
        $password=get('password');
        $date=get('date_of_birth');
        $gender= get('gender');
        $location=get('location');
        $occupation=get('occupation');

        DB::table('users')
            ->where('users.id', Auth::id())
            ->update(['name' => $name])
            ->update(['email' => $email])
            ->update(['password' => $password])
            ->update(['date_of_birth' => $date])
            ->update(['gender' => $gender])
            ->update(['location' => $location])
            ->update(['occupation' => $occupation]);

        return back();
    }
    public function editprofile()
    {
        return view('profile\edit\editform');
    }
}
