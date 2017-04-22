<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyBrowserController extends Controller
{
    public function index()
    {
        $companies = 'company_list';
        return view('companies.companyBrowser')->with(compact('companies'));
    }
}
