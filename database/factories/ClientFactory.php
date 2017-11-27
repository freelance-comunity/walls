<?php

use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    return [
      'name' => $faker->name,
      'last_name' => $faker->name,
      'phone' => $faker->phoneNumber,
      'birthday' => '1995-06-14',
    ];
});
