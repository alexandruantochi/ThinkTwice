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
            if ($request->hasFile('logo'))
            {
                if($request->file('logo')->extension() != 'jpg' || $request->file('logo')->extension() != 'png' || $request->file('logo')->extension() != 'jepg')
                {
                    return view('errors.default')->with(['error'=>['message'=>'Bad file extension. Only jpg, png and jpeg accepted.']]);
                }


            }



    }

}
