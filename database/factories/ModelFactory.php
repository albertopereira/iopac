<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use App\Record;
use App\Biblio;
use App\Marcfield;
use App\Marcsubfield;
use App\Itemtype;

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Biblio::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Itemtype::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Marcfield::class, function (Faker\Generator $faker) {
    return [
        'tagfield' => $faker->lexify('???'),
        'description' => $faker->sentence,
        'repeatable' => 0,
        'mandatory' => 0
    ];
});

$factory->define(App\Marcsubfield::class, function (Faker\Generator $faker)  use ($factory) {
    return [
        'tagfield' => 1,
        'tagsubfield' => $faker->lexify('???'),
        'description' => $faker->sentence,
        'repeatable' => 0,
        'mandatory' => 0
    ];
});


$factory->define(App\Record::class, function (Faker\Generator $faker)  use ($factory) {
    return [
        'biblio' => 1,
        'itemtype' => 1,
        'hidden' => 0
    ];
});


$factory->define(App\RecordField::class, function (Faker\Generator $faker)  use ($factory) {
    return [
        'record_id' => 1, 
        'tagfield' => 1,
        'tagsubfield' => 1,
        'value' => $faker->sentence,
    ];
});
