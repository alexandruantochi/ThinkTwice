<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\Campaign\CustomClasses\SeederHelper;
use App\Http\Controllers\Campaign\CustomClasses\TimePeriods;

class CampaignsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campaigns')->delete();

        $campaigns = array(

            array(
                'name' => 'Save Bees',
                'description' => 'We try to save bees from the molestation of honey making companies.',
                'category' => 'animals',
                'organizer_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'Against Pollution',
                'description' => 'Say no to toxic materials and gases used and distributed by companies.',
                'category' => 'environment',
                'organizer_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'Against Global Warming',
                'description' => 'We fight to stop the use of polluting energy making.',
                'category' => 'environment',
                'organizer_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'Say no to child labour',
                'description' => 'Children from all around Africa, Asia and South America need your help.',
                'category' => 'humanitarian',
                'organizer_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'Stop Ocean Pollution',
                'description' => 'Protect the water that gives us life; oppose those who throw their trash in the water.',
                'category' => 'environment',
                'organizer_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'Stop Deforestation',
                'description' => 'Thousands of forests die everyday. You can change that.',
                'category' => 'environment',
                'organizer_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'Say no to toxic food',
                'description' => 'Our population is getting fatter and less heathier all around, and we have the fast food giants to blame.',
                'category' => 'health',
                'organizer_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'End Animal Testing',
                'description' => 'Animals should be our friends. You wouldn\'t test these toxic chemicals on your friends.',
                'category' => 'animals',
                'organizer_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'Boycott chocolate produced by child slaves',
                'description' => 'Why should children in Ivory Coast work, and sometimes even die, and never be loved? Our chocolate isn\'t worth it.',
                'category' => 'humanitarian',
                'organizer_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'Save the Blue Marble',
                'description' => 'By using readily available data on large global companies,*** we can let you know which ones have made substantial efforts toward lowering carbon emissions to reduce global warming,',
                'category' => 'environment',
                'organizer_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            )

        );

        SeederHelper::randomize_dates($campaigns, TimePeriods::week, TimePeriods::week);

        DB::table('campaigns')->insert($campaigns);

        $other_campaigns = array(

            array(
                'name' => 'Boycott Income Inequality',
                'description' => 'The bloat in corporations for executive teams that really don\'t work thousands of times harder than their employees but are completely overcompensated is getting completely out of hand.',
                'category' => 'economic justice',
                'organizer_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'Feeding America Sponsors',
                'description' => 'Feeding America’s Supporting Partners are recognized for their generous support of Feeding America’s mission to create a hunger-free America.',
                'category' => 'social responsability',
                'organizer_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'Illusion of Choice',
                'description' => 'There is an image out there called "The Illusion of Choice." It shows how a tremendous number of products we buy, all go back to just 10 companies.',
                'category' => 'economic justice',
                'organizer_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'Boycott Koch Industries',
                'description' => 'Koch Industries lives up to their mission by placing their profits before our communities, our environment and our democracy.',
                'category' => 'social responsability',
                'organizer_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'Hobby Lobby and other Contraception Deniers',
                'description' => 'The goal is to boycott all products and services from corporations and other organizations who refuse to cover contraceptive medications to their employees based on the religious beliefs of the owners, shareholders or corporate officers.',
                'category' => 'civil rights',
                'organizer_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),

        );

        SeederHelper::randomize_dates($other_campaigns, TimePeriods::present, TimePeriods::week);

        DB::table('campaigns')->insert($other_campaigns);

    }


}
