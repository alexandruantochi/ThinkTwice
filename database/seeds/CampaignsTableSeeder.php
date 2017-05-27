<?php

use Illuminate\Database\Seeder;

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
                'category' => 'environmental',
                'organizer_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'Against Global Warming',
                'description' => 'We fight to stop the use of polluting energy making.',
                'category' => 'envirnmental',
                'organizer_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'Say no to child labour',
                'description' => 'Children from all around Africa, Asia and South America need your help.',
                'category' => 'humanitarian',
                'organizer_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'Stop Ocean Pollution',
                'description' => 'Protect the water that gives us life; oppose those who throw their trash in the water.',
                'category' => 'environmental',
                'organizer_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'Stop Deforestation',
                'description' => 'Thousands of forests die everyday. You can change that.',
                'category' => 'environmental',
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
                'organizer_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'Save the Blue Marble',
                'description' => 'By using readily available data on large global companies,*** we can let you know which ones have made substantial efforts toward lowering carbon emissions to reduce global warming,',
                'category' => 'envirnmental',
                'organizer_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            )
        );

        DB::table('campaigns')->insert($campaigns);
    }
}
