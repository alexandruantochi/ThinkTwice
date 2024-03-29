<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tests\TestModels\CompanyModel;

class CompanyProfileController extends Controller
{
    public function index($id)
    {
        $id = $id % 6;
        $entity = CompanyModel::generateTestModels()[$id];
        return view('companies.companyProfile')->with(compact('entity'));
    }
}
