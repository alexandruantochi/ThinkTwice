<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignsPopularityController extends Controller
{
    function index() {

        $default_campaigns = array(
            1 => array('id' => 1, 'name' => "Save Bees", 'description' => "We try to save bees from the molestation of honey making companies.",
                'creator' => "Johnny Cool", 'rating' => 5,'companies' =>  array("Google", "Amazon")),
            2 => array('id' => 2, 'name' => "Against Pollution", 'description' => "Say no to toxic materials and gases used and distributed by companies.",
                'creator' => "Kid Bob", 'rating' => 3, 'companies' => array("Amazon", "Rexona", "Head & Shoulders")),
            3 => array('id' => 3, 'name' => "Global Warming", 'description' => "We fight to stop the use of polluting energy making.",
                'creator' => "Vlad Vladinski", 'rating' => 4,'companies' =>  array("Coca-Cola", "Head & Shoulders", "Pepsi")),
            4 => array('id' => 4, 'name' => "Say no to child labour", 'description' => "Children from all around Africa, Asia and South America need your help.",
                'creator' => "Copper Field", 'rating' => 5, 'companies' => array("Amazon", "Matache Macelarul", "Ariston")),
            5 => array('id' => 5, 'name' => "Stop ocean pollution", 'description' => "Protect the water that gives us life; oppose those who throw their trash in the water.",
                'creator' => "Johnny Deep", 'rating' => 2, 'companies' => array("Fairy", "Colgate", "Kaufland", "Carefour")),
            6 => array('id' => 6, 'name' => "Stop deforestation", 'description' => "Thousands of forests die everyday. You can change that.",
                'creator' => "Sasha Grey", 'rating' => 5, 'companies' => array("Nestle")),
        );

        return view('campaigns.campaignBrowser')->with('entities', $default_campaigns);
    }
}
