<?php
/**
 * Created by PhpStorm.
 * User: EL Diesel
 * Date: 28.05.2017
 * Time: 14:42
 */
namespace App\Http\Controllers\Campaign\CustomClasses;

use Illuminate\Support\Facades\DB;

final class SuggestionsAlg {

    private $DIObject;
    private $categories;
    private $exponentiation_factor = 2;

    public function __construct($DIObject, $categories) {

        $this->DIObject = $DIObject;
        $this->categories = $categories;

    }

    public function makeSuggstions($user_id, $howMany) {


        //for every category that the user doesn't have a sub for, we assign a default value that will translate along the way in a lower probability of that category of being choosed
        $this->init_weights();

        //every category will have associated a number representing the number of occurences of that category in the user's subs. The higher the number, the higher the probability the category is chosen.
        $stats = $this->DIObject->getStats($user_id);

        //updates the category array with the above results leaving the categories that the user doesn't have a sub for, defaulted
        $this->update_weights($stats);

        //we exponentiate the weights so that differences in probability become more accentuated giving the suggestions more relevance
        $this->exponentiate_weights();

        //we will tranlate the above values into percentages of their sum; we then redo the values of the array according to roullete selection
        $roullete = $this->prepare_roullete_selection();

        //generate $howMany suggestions
        return $this->generate_suggestions($roullete, $howMany);

    }

    private function init_weights() {

        $new_data = null;

        foreach($this->categories as $category) {
            $new_data[$category] = 1/2;
        }

        $this->categories = $new_data;

    }

    private function update_weights($stats) {

        $keys = array_keys($this->categories);

        for($i = 0; $i < count($this->categories); $i++) {

            foreach($stats as $stat) {

                if ($keys[$i] == $stat->category) {
                    $this->categories[$stat->category] = $stat->count;
                    break;
                }
            }

        }

    }

    private function exponentiate_weights() {

        $keys = array_keys($this->categories);

        for($i = 0; $i < count($this->categories); $i++) {

            $this->categories[$keys[$i]] = pow($this->categories[$keys[$i]], $this->exponentiation_factor);

        }

    }

    private function prepare_roullete_selection() {

        $sum = array_sum($this->categories);

        $keys = array_keys($this->categories);

        for($i = 0; $i < count($this->categories); $i++) {

            $this->categories[$keys[$i]] = $this->categories[$keys[$i]] / $sum;

        }

        $roullete[$keys[0]] = $this->categories[$keys[0]];

        for($i = 1; $i < count($this->categories); $i++) {

            $roullete[$keys[$i]] = $roullete[$keys[$i - 1]] + $this->categories[$keys[$i]];

        }

        return $roullete;

    }

    private function generate_suggestions($roullete, $howMany) {

        $suggestions = array();

        for($i = 0; $i < $howMany; $i++) {


            //generate a random probability

            $rand = mt_rand(0, 10000);
            $rand = $rand / 10000;

            $keys = array_keys($roullete);

            for($j = 0; $j < count($roullete); $j++) {

                if ($rand < $roullete[$keys[$j]]) {

                    $count = count($suggestions);

                    do{

                        $result = $this->DIObject->getResultByCategory($keys[$j]);


                    }while($count == array_push($suggestions, $result)); //array_push returns the size of the new array. If the size doesn't change we try adding another entry (randomly).
                                                                        // This is not optimal and can lead to infinite loop so it should be changed


                    break;

                }

            }

        }

        return $suggestions;

    }

}

?>