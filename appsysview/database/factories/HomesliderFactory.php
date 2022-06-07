<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Homeslider;
use Faker\Generator as Faker;

$factory->define(Homeslider::class, function (Faker $faker) {
    return [
        'title' => $this->faker->company(),
        'description' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
        'link' =>  $this->faker->randomElement($array = array('http://www.patric.dev','http://www.miche.com','https://www.smauel.com')),
        'backimgview' => $this->faker->randomElement($array = array('default/home-banner1.jpg','default/home-banner2.jpg','default/home-banner3.jpg','default/home-banner4.jpg','default/home-banner5.jpg','default/home-banner6.jpg','default/home-banner7.jpg','default/home-banner8.jpg','default/home-banner9.jpg','default/home-banner10.jpg','')),
        'status' => '1',
        'langues' => '1',
        'level' =>'20',
        'iduser' =>'1',
    ];
});
