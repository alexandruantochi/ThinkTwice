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

    private function __construct() {

        $this->num_default_results = 6;

    }

    public static function get_Instance() {

        static $inst = null;
        if ($inst === null) {
            $inst = new CampaignConfigurations();
        }
        return $inst;

    }

}

?>