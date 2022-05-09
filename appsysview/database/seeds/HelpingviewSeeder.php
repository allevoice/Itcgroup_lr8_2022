<?php

use Illuminate\Database\Seeder;

class HelpingviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Helpingview::class, 10)->create();
    }
}
