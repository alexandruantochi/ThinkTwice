<?php

namespace App\Http\Controllers\Companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;

class CompanyBrowserController extends Controller
{
    public function browseCompanies(Request $request, $page=1)
    {
        $companies =  Company::orderBy('rating')->paginate(5);

        return view('companies.browse', compact('companies'));
    }
}
