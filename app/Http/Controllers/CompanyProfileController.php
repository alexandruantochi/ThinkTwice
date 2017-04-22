<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function index($id)
    {
        return view('companies.companyProfile')->with(compact('id'));
    }
}
