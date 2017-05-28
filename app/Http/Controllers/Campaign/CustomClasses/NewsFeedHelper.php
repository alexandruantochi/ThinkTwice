<?php
/**
 * Created by PhpStorm.
 * User: EL Diesel
 * Date: 28.05.2017
 * Time: 11:05
 */

namespace App\Http\Controllers\Campaign\CustomClasses;

use Illuminate\Support\Facades\DB;

final class NewsFeedHelper {

    private static $std_message = "NEW CAMPAIGN!";

    public static function makeAtom() {

        try {

            $atom = NewsFeedHelper::initAtom();
            $feed = NewsFeedHelper::initFeed($atom);

            NewsFeedHelper::createHeaderForFeed($atom, $feed);

            NewsFeedHelper::populateAtom($atom, $feed);

            return $atom;

        }
        catch (\Exception $e) {
            die ($e->getMessage());
        }

    }

    private static function initAtom() {

        $atom = new \DOMDocument('1.0', 'utf-8');
        $atom->formatOutput = true;

        return $atom;

    }

    private static function initFeed($atom) {

        $feed = NewsFeedHelper::createChild_($atom, $atom, "feed");

        return $feed;

    }

    private static function createHeaderForFeed($atom, $feed) {

        NewsFeedHelper::createEntry_($atom, $feed, "title", "Think Twice");

        NewsFeedHelper::createEntry_($atom, $feed, "updated", "2017-05-17T10:40:02Z");

        NewsFeedHelper::createEntry_($atom, $feed, "id", "urn:uuid:60a76c80-d399-11d9-b93C-0003939e0af6");

    }

    private static function populateAtom($atom, $feed) {

        $news = NewsFeedHelper::getNews();

        foreach($news as $news_entry) {

            $entry = NewsFeedHelper::createChild_($atom, $feed, "entry");

            $title = NewsFeedHelper::createEntry_($atom, $entry, "title", NewsFeedHelper::$std_message . ' ' . trim($news_entry->name));
            $link = NewsFeedHelper::createEntry_($atom ,$entry, "link", "", array("href" => 'http://127.0.0.1:8000//campaigns/' . $news_entry->id));
            $id = NewsFeedHelper::createEntry_($atom, $entry, "id", $news_entry->category);
            $updated = NewsFeedHelper::createEntry_($atom, $entry, "updated", $news_entry->updated_at);
            $summary = NewsFeedHelper::createEntry_($atom, $entry, "summary", trim($news_entry->description));

        }

    }

    private static function getNews() {

        $new_campaigns = DB::table('campaigns')
                                ->orderBy('created_at', 'desc')
                                ->take(NewsFeedConfigurations::get_Instance()->default_num_of_results)
                                ->get();

        return $new_campaigns;

    }

    private static function createEntry_($atom, $parent, $name, $text, $attributeArray = array()) {

        $element = NewsFeedHelper::createChild_($atom, $parent, $name);

        NewsFeedHelper::createChildText_($atom, $element, $text);

        foreach($attributeArray as $attribute => $value) {

            $element->setAttribute($attribute, $value);

        }

        return $element;

    }

    private static function createChild_($atom, $parent, $name) {

        $child = $atom->createElement($name);

        $child_node = $parent->appendChild($child);

        return $child;

    }

    private static function createChildText_($atom, $parent, $text) {

        $child = $atom->createTextNode($text);

        $child_node = $parent->appendChild($child);

        return $child_node;

    }

}

?>