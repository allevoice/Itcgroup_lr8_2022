<?php

use Illuminate\Database\Seeder;

class HowareyouSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Howareyou::class, 5)->create();
    }
}
