<?php
/**
 * Created by PhpStorm.
 * User: EL Diesel
 * Date: 28.05.2017
 * Time: 11:13
 */

namespace App\Http\Controllers\Campaign\CustomClasses;

final class NewsFeedConfigurations {

    public $default_num_of_results;

    private function __construct() {

        $this->default_num_of_results = 10;

    }

    public static function get_Instance() {

        static $inst = null;
        if ($inst === null) {
            $inst = new NewsFeedConfigurations();
        }
        return $inst;

    }

}

?>