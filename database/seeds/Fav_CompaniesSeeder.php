<?php

use Illuminate\Database\Seeder;

class Fav_CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faved = array(
            array('user_id' => 1, 'company_id' => 1, 'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')),
            array('user_id' => 1, 'company_id' => 3, 'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')));


        DB::table('fav_companies')->insert($faved);
    }
}
