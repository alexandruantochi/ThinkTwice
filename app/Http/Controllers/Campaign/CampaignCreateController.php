<?php

namespace App\Http\Controllers\Campaign;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CampaignCreateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function firstForm() {

        return view();

    }
}
