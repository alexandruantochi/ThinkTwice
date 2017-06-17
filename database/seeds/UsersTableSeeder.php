<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\Campaign\CustomClasses\SeederHelper;
use App\Http\Controllers\Campaign\CustomClasses\TimePeriods;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = array(
            array(
                'name' => 'Hung Lo',
                'email' => 'hunglo20@gmail.com',
                'password' => bcrypt('smantana'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'Daniel Abagiu',
                'email' => 'danielabagiu@gmail.com',
                'password' => bcrypt('savarina'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'Floricica Dansatoarea',
                'email' => 'huooooo@gmail.com',
                'password' => bcrypt('huooooo'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'Bruce Lee',
                'email' => 'BruceLee@gmail.com',
                'password' => bcrypt('be_like_water'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name' => 'Mr. T',
                'email' => 'coolT@gmail.com',
                'password' => bcrypt('mysterious'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            )
        );

        SeederHelper::randomize_dates($users, TimePeriods::month, TimePeriods::week);

        DB::table('users')->insert($users);
    }
}
