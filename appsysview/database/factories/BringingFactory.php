<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bringing;
use Faker\Generator as Faker;

$factory->define(Bringing::class, function (Faker $faker) {
    return [
        'backimg' => 'default/business-meeting.png',
        'description' => $this->faker->text($maxNbChars = 500),
        'link' => $this->faker->randomElement($array = array('http://www.patric.dev','http://www.miche.com','https://www.smauel.com')),
        'status' => '1',
        'langues' => '1',
    ];
});
