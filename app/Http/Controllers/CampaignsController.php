<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignsController extends Controller
{
    function index(){

        $default_campaigns = array(
            1 => array("Save Bees", "We try to save bees from the molestation of honey making companies."),
            2 => array("Against Pollution", "Say no to toxic materials and gases used and distributed by companies."),
            3 => array("Against Global Warming", "We fight to stop the use of polluting energy making."),
            4 => array("Say no to child labour", "Children from all around Africa, Asia and South America need your help."),
            5 => array("Stop ocean pollution", "Protect the water that gives us life; oppose those who throw their trash in the water."),
            6 => array("Stop deforestation", "Thousands of forests die everyday. You can change that."),

        );

        return view('campaigns.campaigns')->with('default_campaigns', $default_campaigns);
    }
}
