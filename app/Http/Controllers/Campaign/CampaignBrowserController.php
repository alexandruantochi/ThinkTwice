<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignBrowserController extends Controller
{
    function index(){

        $default_campaigns = array(
            1 => array('id' => 1, 'name' => "Save Bees", 'description' => "We try to save bees from the molestation of honey making companies."),
            2 => array('id' => 2, 'name' => "Against Pollution", 'description' => "Say no to toxic materials and gases used and distributed by companies."),
            3 => array('id' => 3, 'name' => "Against Global Warming", 'description' => "We fight to stop the use of polluting energy making."),
            4 => array('id' => 4, 'name' => "Say no to child labour", 'description' => "Children from all around Africa, Asia and South America need your help."),
            5 => array('id' => 5, 'name' => "Stop ocean pollution", 'description' => "Protect the water that gives us life; oppose those who throw their trash in the water."),
            6 => array('id' => 6, 'name' => "Stop deforestation", 'description' => "Thousands of forests die everyday. You can change that."),

        );

        return view('campaigns.campaigns')->with('default_campaigns', $default_campaigns);
    }
}
