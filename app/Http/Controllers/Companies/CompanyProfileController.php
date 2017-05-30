<?php

namespace App\Http\Controllers\Companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
use App\FavCompany;
use Illuminate\Support\Facades\Auth;


class CompanyProfileController extends Controller
{
    public function viewProfile($id)
    {
        $company = Company::find($id);
        $isFaved = FavCompany::where('company_id', $id)->where('user_id', Auth::id())->count();

        return view('companies.companyProfile', compact('company', 'isFaved'));
    }


    public function favCompany($id)
    {

        $isFaved = FavCompany::where('company_id', $id)->where('user_id', Auth::id())->count();
        if ($isFaved == 0) {
            $faved = new FavCompany();
            $faved->fill(['user_id' => Auth::id(), 'company_id' => $id]);
            $faved->save();

            $company = Company::find($id);
            $company->faved=$company->faved+1;
            $company->save();


        } else {
            $faved = FavCompany::where('company_id', $id)->where('user_id', Auth::id());
            $faved->delete();

            $company = Company::find($id);
            $company->faved=$company->faved-1;
            $company->save();
        }

        return back();

    }

    public function rateCompany(Request $request, $id)
    {

    }


    public function viewProducts($id)
    {
        $products = Company::find($id)->products;

        return view('products.allProducts', compact('products'));

    }
}
