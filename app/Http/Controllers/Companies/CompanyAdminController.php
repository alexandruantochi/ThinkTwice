<?php

namespace App\Http\Controllers\Companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\UGC_Company;
use App\Company;
use Illuminate\Support\Facades\File;


class CompanyAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->checkAuth();

    }

    public function checkAuth()
    {
        if (Auth::user() != 'alex_test') {
            $message['error'] = 'You are not allowed to perform this actions.';
            return view('errors.default', compact('message'));
        }

        return true;

    }

    public function viewCompanies()
    {


        $companies = Company::all();

        return view('companies.companyAdmin', compact('companies'));

    }

    public function deleteCompany($id)
    {
        Company::destroy($id);

        return back();
    }


    public function editCompany($id)
    {
        $company = Company::find($id);

        if (isset($company->id)) {
            return view('companies.editCompany', compact('company'));
        } else {
            $error['message'] = 'Company does not exist.';

            return view('errors.default', compact('error'));
        }
    }

    public function saveEditedCompany(Request $request)
    {

        $company = Company::find($request->get('id'));

        if (isset($company->id)) {
            $company->name = $request->get('name');
            $company->description = $request->get('description');
            $company->contact = $request->get('contact');

            $company->save();

            return back();
        } else {
            $error['message'] = 'Company does not exist.';

            return view('errors.default', compact('error'));
        }

    }

    public function viewSuggestions()
    {
        $companies = UGC_Company::all();

        return view('companies.UGCadmin', compact('companies'));
    }

    public function deleteSuggestion($id)
    {
        UGC_Company::destroy($id);

        return back();

    }

    public function approveSuggestion($id)
    {


        $company = new Company();
        $ugc = UGC_Company::find($id);

        $company->fill(['name' => $ugc->name, 'contact' => $ugc->contact, 'description' => $ugc->description]);
        $company->rating=5;
        $company->faved=0;
        $company->raters=0;
        $company->parent=0;

        $company->save();


        if (file_exists("E:\\Scoala\\Anul II\\Sem II\\TW\\ThinkTwice\\public\\images\\companies\\" . $ugc->id)) {
            mkdir('E:\Scoala\Anul II\Sem II\TW\ThinkTwice\public\images\companies\\' . $company->id);
            $from = "E:\\Scoala\\Anul II\\Sem II\\TW\\ThinkTwice\\storage\\app\\public\\images\\ugc_companies\\" . $ugc->id . "\\logo.png";
            $to = "E:\\Scoala\\Anul II\\Sem II\\TW\\ThinkTwice\\public\\images\\companies\\" . $company->id . "\\logo.png";
            File::move($from, $to);
        }


        UGC_Company::destroy($id);
        return back();

    }

    public function statistics()
    {

    }


    public function viewCompanyDetails()
    {
        $companies = Company::all()->paginate(5);
        return view('companies.admin', compact('companies'));
    }


}
