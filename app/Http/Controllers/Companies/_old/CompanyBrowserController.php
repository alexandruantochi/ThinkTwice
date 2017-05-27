<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tests\TestModels\CompanyModel;

class CompanyBrowserController extends Controller
{
    public function index()
    {
        $entities = CompanyModel::generateTestModels();
        return view('companies.companyBrowser')->with(compact('entities'));
    }

    public function order()
    {

        //some new entities ordered by request
        $entities = CompanyModel::generateTestModels();
        shuffle($entities);
        return view('companies.companyBrowser')->with(compact('entities'));
    }
}
