<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\Campaign\CustomClasses\SeederHelper;
use App\Http\Controllers\Campaign\CustomClasses\TimePeriods;

class CampaignsPendingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pending_campaigns = array(

            array(
                'name' => 'test',
                'description' => 'test',
                'category' => 'test',
                'organizer_id' => '4',
                'number_of_power_user_approves' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            )

        );

        SeederHelper::randomize_dates($pending_campaigns, TimePeriods::present, TimePeriods::week);

        DB::table('campaigns_pending')->insert($pending_campaigns);
    }
}
