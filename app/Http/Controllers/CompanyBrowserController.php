<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tests\TestModels\CompanyModel;

class CompanyBrowserController extends Controller
{
    public function index()
    {
        $companies = CompanyModel::generateTestModels();
        return view('companies.companyBrowser')->with(compact('companies'));
    }
}
