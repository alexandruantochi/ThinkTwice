<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Campaign\CustomClasses\NewsFeedHelper;
use Illuminate\Support\Facades\Response;

class NewsFeedController extends Controller
{
    function index() {

        $atom = NewsFeedHelper::makeAtom();

        return Response::make($atom->saveXML(), '200')->header('Content-Type', 'text/xml');

    }
}
