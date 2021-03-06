<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(HelpingviewSeeder::class);
        $this->call(HowareyouSeeder::class);
        $this->call(BringingSeeder::class);
        $this->call(ServiceoffertSeeder::class);
        $this->call(HomesliderSeeder::class);
    }
}
