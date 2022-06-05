<?php

use Illuminate\Database\Seeder;

class ServiceoffertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Serviceoffert::class, 50)->create();
    }
}
