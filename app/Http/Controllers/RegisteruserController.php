<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisteruserController extends Controller
{
    public function show()
    {
        return view('auth\register\registeruser');
    }
}
