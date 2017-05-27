<?php
/**
 * Created by PhpStorm.
 * User: EL Diesel
 * Date: 27.05.2017
 * Time: 13:11
 */
namespace App\Http\Controllers\Campaign\CustomClasses;

final class CampaignConfigurations {

    public $num_default_results;
    public $num_results_page;
    public $default_trending_period;

    private function __construct() {

        $this->num_default_results = 6;
        $this->num_results_page = 10;
        $this->default_trending_period = 12;

    }

    public static function get_Instance() {

        static $inst = null;
        if ($inst === null) {
            $inst = new CampaignConfigurations();
        }
        return $inst;

    }

    public static function generate_random_timestamp() {

        $max = time();
        $min = $max - 604800; //604800 means 1 week

        $result = mt_rand($min, $max);

        return $result;

    }

}

?>