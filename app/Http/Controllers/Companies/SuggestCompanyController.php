<?php

namespace App\Http\Controllers\Companies;

use App\UGC_Company;
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

        $company = new UGC_Company();
        $company->fill(['name' => $request->get('name'), 'description' => $request->get('description'),
            'contact' => $request->get('email'), 'suggester' => Auth::user()->name, 'user_id' => Auth::id()]);
        $company->save();

        if ($request->hasFile('logo')) {
            if ($request->file('logo')->getMimeType() != 'image/jpeg') {
                return view('errors.default')->with(['error' => ['message' => 'Bad file extension. Only pictures accepted.']]);
            }
            $logo = $request->file('logo');
            $logo->storeAs("images/ugc_companies/" . $company->id, 'logo.png');
        }

        $error['message']='Company saved. Thanks!';
        return view('errors.default', compact('error'));
    }
}


