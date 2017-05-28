<?php
/**
 * Created by PhpStorm.
 * User: EL Diesel
 * Date: 27.05.2017
 * Time: 21:28
 */
namespace App\Http\Controllers\Campaign\CustomClasses;

abstract class TimePeriods
{
    const present = 0;
    const hour = 3600;
    const day = 86400;
    const week = 604800;
    const month = 2629743;
    const year = 31556926;
}

final class SeederHelper {

    public static function generate_random_dates($offset_to_start, $offset_from_start, &$created_at, &$updated_at) {

        $top = time() - $offset_to_start;
        $bottom = $top - $offset_from_start;

        $created_at = mt_rand($bottom, $top);
        $updated_at = mt_rand($bottom, $top);

        while ($updated_at < $created_at) {
            $updated_at = mt_rand($bottom, $top);
        }

    }

    public static function randomize_dates(&$seeds, $offset_to_start, $offset_from_start) {

        for($i = 0; $i < count($seeds); $i++) {
            SeederHelper::generate_random_dates($offset_to_start, $offset_from_start, $seeds[$i]['created_at'], $seeds[$i]['updated_at']);
            $seeds[$i]['created_at'] = date('Y-m-d H:i:s', $seeds[$i]['created_at']);
            $seeds[$i]['updated_at'] = date('Y-m-d H:i:s', $seeds[$i]['updated_at']);
        }

    }

}


?>