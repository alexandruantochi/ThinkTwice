<?php

namespace App\Http\Controllers\Companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;


class CompanyProfileController extends Controller
{
    public function viewProfile($id)
    {

        echo asset('js/temp/jquery.min.js');
        //return Company::where('id',$id)->first();
    }

    public function viewProducts($id)
    {

    }
}
