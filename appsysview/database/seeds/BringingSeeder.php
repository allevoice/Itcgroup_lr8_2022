<?php

use Illuminate\Database\Seeder;

class BringingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Bringing::class, 5)->create();
    }
}
