<?php

use Illuminate\Database\Seeder;

class SubstancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('substances')->delete();
        $substances=array(
            array('name'=>'GREEN CHILIES'),//green chiles
            array('name'=>'WATER'),
            array('name'=>'SALT'),
            array('name'=>'CITRIC ACID'),
            array('name'=>'CALCIUM CHLORIDE'),
            array('name'=>'Rapeseed Oil'),//doritos water,salt
            array('name'=>'Sour Cream'),
            array('name'=>'Mature White Cheddar Cheese'),
            array('name'=>'White Wine Vinegar'),
            array('name'=>'Dried Egg Yolk'),
            array('name'=>'Salt'),
            array('name'=>'Spices'),
            array('name'=>'Acidity Regulator'),
            array('name'=>'Diced Tomatoes'),//salsa soos salt citiric acid water
            array('name'=>'Tomato Puree'),
            array('name'=>'Onions'),
            array('name'=>'Red Bell Peppers'),
            array('name'=>'Jalapeno Peppers'),
            array('name'=>'Garlic'),
            array('name'=>'Sugar'),
            array('name'=>'Cilantro'),
            array('name'=>'Concentrated Lime Juice'),
            array('name'=>'Chipotle Pepper Puree'),
            array('name'=>'Caramel Color'),//pepsi water sugar citric acid caffeine
            array('name'=>'Caffeine'),
            array('name'=>'Natural Flavor'),
            array('name'=>'Concentrated orange juice'),//mtn dew sugar water citirc acid natural flavors
            array('name'=>'Sodium citrate'),
            array('name'=>'Barley malt'),//corona water same for becks,stella artois
            array('name'=>'hops'),
            array('name'=>'yeast'),
            array('name'=>'CHOCOLATE'),//MARS SUGAR SALT
            array('name'=>'SOY LECITHIN'),
            array('name'=>'ARTIFICIAL FLAVOR'),
            array('name'=>'PEANUTS'),
            array('name'=>'CORN SYRUP'),
            array('name'=>'EGG WHITES'),
            array('name'=>'Sodium Laureth Sulfate'),//DOVE WATER
            array('name'=>'Glycol Distearate'),
            array('name'=>'Cocamidopropyl Betaine'),
            array('name'=>'Glycerin'),
            array('name'=>'Dimethicone'),
            array('name'=>'Gluconolactone'),
            array('name'=>'Sodium Sulfate'),
            array('name'=>'Palm Oil'),//nutella sugar
            array('name'=>'Skimmed milk powder'),
            array('name'=>'Low Fat Cocoa'),
            array('name'=>'Hazel Nuts'),
            array('name'=>'maltodextrin'),//pringles
            array('name'=>'dextrose'),
            array('name'=>'monosodium glutamate'),
            array('name'=>'disodium inosinate'),
            array('name'=>'disodium guanylate'),
            array('name'=>'sodium caseinate'),
            array('name'=>'starch'),
            array('name'=>'wheat bran')
        );
        DB::table('substances')->insert($substances);
    }
}
