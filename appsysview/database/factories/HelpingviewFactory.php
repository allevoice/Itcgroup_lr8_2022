<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Helpingview;
use Faker\Generator as Faker;

$factory->define(Helpingview::class, function (Faker $faker) {
    return [
        'backimghelp'=> $this->faker->randomElement($array = array('default/commitment.jpg','default/business-quality.jpg','default/business-success.jpg')),
        'Description' =>  $this->faker->randomElement($array = array('Photo, The quick brown fox jumps over the lazy dog','Informatique, Internet, Datacenter, The quick brown fox jumps over the lazy dog','Domaine name, byuiding website, The quick brown fox jumps over the lazy dog')),
        'title' => $this->faker->company(),
        'status' => '1',
        'langues' => '1',
        'level' =>'20',
    ];
});
