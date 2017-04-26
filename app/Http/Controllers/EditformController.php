<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditformController extends Controller
{
    public function editprofile()
    {
        return view('profile\edit\editform');
    }
}
