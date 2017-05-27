<?php

namespace App\Http\Controllers\Companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;


class CompanyProfileController extends Controller
{
    public function viewProfile($id)
    {
        return Company::where('id',$id)->first();
    }
}
