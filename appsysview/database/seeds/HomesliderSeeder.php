<?php

use Illuminate\Database\Seeder;

class HomesliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Homeslider::class, 4)->create();
    }
}
