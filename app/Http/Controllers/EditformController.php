<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class EditformController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function save(Request $request)

    {   $user_id = Auth::id();


     if($request->get('password')!=null) {
         DB::table('users')
             ->where('users.id',$user_id)
             ->update(['password' => $request->get('password')]);
     }
     if($request->get('name')!=null) {
         DB::table('users')
             ->where('users.id', $user_id)
             ->update(['name' => $request->get('name')]);
     }
        if($request->get('email')!=null) {
        DB::table('users')
            ->where('users.id',$user_id)
            ->update(['email' =>$request->get('email')]);
     }
        DB::table('users')
            ->where('users.id',$user_id)->update(['date_of_birth' => $request->get('date')]);
         DB::table('users')
             ->where('users.id',$user_id)->update(['gender' => $request->get('gender')]);
         DB::table('users')
             ->where('users.id',$user_id)->update(['location' => $request->get('location')]);
          DB::table('users')
              ->where('users.id',$user_id)->update(['occupation' => $request->get('occupation')]);

        return back();
    }
    public function editprofile()
    {
        return view('profile\edit\editform');
    }
}
