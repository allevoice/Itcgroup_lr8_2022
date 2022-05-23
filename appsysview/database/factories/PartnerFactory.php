<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Partner;
use Faker\Generator as Faker;

$factory->define(Partner::class, function (Faker $faker) {
    return [
        'backimgpartner'=> $this->faker->randomElement($array = array('default/services-img2.jpg','default/services-img3.jpg','default/services-img4.jpg','default/services-img7.jpg','')),
        'imgpartner'=> $this->faker->randomElement($array = array('default/partner-logo1.png','default/partner-logo2.png','default/partner-logo3.png','default/partner-logo4.png')),
        'linkpartner' =>  $this->faker->randomElement($array = array('http://www.patric.dev','http://www.miche.com','https://www.smauel.com')),
        'servicepartner' =>  $this->faker->randomElement($array = array('Photo, The quick brown fox jumps over the lazy dog','Informatique, Internet, Datacenter, The quick brown fox jumps over the lazy dog','Domaine name, byuiding website, The quick brown fox jumps over the lazy dog')),
        'titlepartner' => $this->faker->company(),
        'titleservices' => $this->faker->company(),
        'status' => '1',
//            'status_id' => Status::all()->random(),
        'langues' => '1',
        'level' =>'20',
    ];
});
