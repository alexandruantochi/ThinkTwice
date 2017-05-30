<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $this->call(CompanyTableSeeder::class);
       $this->call(ProductsTableSeeder::class);
       $this->call(UsersTableSeeder::class);
       $this->call(CampaignsTableSeeder::class);
       $this->call(CampaignSubsSeeder::class);
       $this->call(CampaignsPendingSeeder::class);
       $this->call(SubstancesTableSeeder::class);
       $this->call(ProductSubstanceTableSeeder::class);
       $this->call(ProductReviewsTableSeeder::class);
       $this->call(SupCampaignsSeeder::class);
    }
}
