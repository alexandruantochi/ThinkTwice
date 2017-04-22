<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainOfflinePageController extends Controller
{
    public function index()
    {
        return view('mainOffPage');
    }
}
