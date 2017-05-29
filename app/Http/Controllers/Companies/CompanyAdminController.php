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
        $this->checkAuth();

    }

    public function checkAuth()
    {
        if (Auth::user()->name != 'alex_test') {
            $message['error'] = 'You are not allowed to perform this actions.';
            return view('errors.default', compact('message'));
        }

    }

    public function viewCompanies(){

    }

    public function viewSuggestions()
    {

    }

    public function statistics()
    {

    }

    public function viewSuggestionDetails($id)
    {
        $ugcCompanies = UGC_Company::where('id',$id)->first(1);
        return view('companies.UGCadmin');
    }

    public function editSuggestion(Request $request, $id)
    {

    }


    public function viewCompanyDetails()
    {
        $companies = Company::all()->paginate(5);
        return view('companies.admin', compact('companies'));
    }

    public function editCompany(Request $request, $id)
    {


    }


}
