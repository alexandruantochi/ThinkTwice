<?php

namespace App\Http\Controllers\Companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\UGC_Company;
use App\Company;

class CompanyAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');


    }

    public function viewSuggestions()
    {

        if (Auth::user()->name != 'alex_test') {
            $message['error'] = 'You are not allowed to perform this actions.';
            return view('errors.default', compact('message'));
        }

        $ugcCompanies = UGC_Company::all();

        return view('companies.UGCadmin');

    }

    public function viewCompanies()
    {
        $companies = Company::all()->paginate(5);
        return view('companies.admin', compact('companies'));
    }

    public function editCompany(Request $request, $id)
    {


    }


    public function editSuggestion(Request $request, $id)
    {

    }
}
