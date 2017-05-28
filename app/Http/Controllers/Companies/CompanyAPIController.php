<?php

namespace App\Http\Controllers\Companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;

class CompanyAPIController extends Controller
{
    public function main(Request $request, $companyName)
    {


        $companyName = strtolower($companyName);
        if (strlen($companyName) < 4) {
            $error['message'] = 'Please provide more than 4 characters.';
            return view('errors.badRequest', compact('error'));
        }

        $companies = Company::where('name','like','%'.$companyName.'%')->get();

        return $companies->toJson();

    }
}
