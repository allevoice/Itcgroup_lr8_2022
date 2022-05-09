<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Skill;
use Faker\Generator as Faker;

$factory->define(Skill::class, function (Faker $faker) {
    return [
        'title'=> $this->faker->company(),
        'linkskill'=>$this->faker->randomElement($array = array('http://www.patric.dev','http://www.miche.com','https://www.smauel.com')),
        'numberskill'=>$this->faker->randomElement($array = array('30','49','90')),
        'status'=>'1',
        'langues'=>'1',
        'level'=>'1',
        'iduser'=>'1',
    ];
});
