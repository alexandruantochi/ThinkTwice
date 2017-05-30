<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ProductReviewsTableSeeder extends Seeder
{
    public function run(){

        $faker=Faker::create('App\ProductReviews');

        $nrOfUsers=DB::table('users')
            ->select(DB::raw('count(*) as number'))
            ->first();

        $nrOfProducts=DB::table('products')
            ->select(DB::raw('count(*) as number'))
            ->first();


        DB::table('product_reviews')->delete();

        for ($i=1;$i<40;$i++){
            DB::table('product_reviews')->insert(array(
                array(
                    'product_id'=>$faker->numberBetween(1,$nrOfProducts->number),
                    'user_id'=>$faker->numberBetween(1,$nrOfUsers->number),
                    'product_rating'=>$faker->numberBetween(1,5),
                    'review'=>$faker->paragraph(3),
                    'created_at' =>$faker->dateTimeThisYear,
                    'updated_at' =>$faker->dateTimeThisYear
                )
            ));
        }
    }
}
