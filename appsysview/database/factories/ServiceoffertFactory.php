<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Serviceoffert;
use Faker\Generator as Faker;

$factory->define(Serviceoffert::class, function (Faker $faker) {
    return [
        'codeservice' => $this->faker->ean8(),
        'title' => $this->faker->company(),
        'titleinfo' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
        'description' =>  $this->faker->randomElement($array = array('<h1 id="presoh1">Votre code est bien ecrit</h1><p>Photo, The quick brown fox </p><p>jumps over the lazy dog</p>','<h1 id="presoh1">Informatique</h1> Internet, Datacenter, <p>The quick brown fox jumps </p>over the lazy dog','<h1 id="presoh1">Domaine name</h1>, byuiding website, <p>The quick brown fox jumps over the lazy dog</p>')),
        'blueicone' => $this->faker->randomElement($array = array('default/invest-img.png','default/funds-img.png','default/saving-img.png','default/retirement-img.png')),
        'whiteicone' => $this->faker->randomElement($array = array('default/funds-imgHover.png','default/invest-imgHover.png','default/saving-imgHover.png','default/retirement-imgHover.png')),
        'img1' => $this->faker->randomElement($array = array('default/services-img2.jpg','default/services-img3.jpg','default/services-img4.jpg','default/services-img7.jpg')),
        'status' => '1',
        'langues' => '1',
        'level' =>'20',
        'iduser' =>'1',
    ];
});
