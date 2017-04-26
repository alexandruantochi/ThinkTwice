<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginuserController extends Controller
{
    public function show()
    {
        return view('auth\login\loginuser');
    }
}
