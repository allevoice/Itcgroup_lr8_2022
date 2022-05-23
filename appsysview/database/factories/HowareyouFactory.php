<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Howareyou;
use Faker\Generator as Faker;

$factory->define(Howareyou::class, function (Faker $faker) {
    return [
        'title' => $this->faker->company(),
        'backimg' => 'default/who-we-are-img.png',
        'description' => $this->faker->text($maxNbChars = 200),
        'link' => $this->faker->randomElement($array = array('http://www.patric.dev','http://www.miche.com','https://www.smauel.com')),
        'status' => '1',
        'langues' => '1',
    ];
});
