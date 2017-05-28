<?php

namespace App\Http\Controllers\Companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SuggestCompanyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function main(Request $request)
    {
            return view('companies.suggestForm')->with(['user' => Auth::user()]);
    }

    public function saveCompany(Request $request)
    {
            dd($request->get('name'));
    }

}
