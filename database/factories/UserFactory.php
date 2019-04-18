<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

// $factory->define(App\Category::class, function (Faker $faker) {
//     return [
//         'categoryName' => $faker->name,
//         'shortDescription' => $faker->text,
//         'publicationStatus' =>1
        
//     ];
// });



$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'productName' => $faker->word,
        'categoryId' => 19,
        'price' => $faker->numberBetween($min = 20, $max = 10000),
        'qty' => $faker->numberBetween($min = 20, $max = 10000),
        'shortDescription' => $faker->text,
        'pic' => 'productImage/11images(3).jpg',	
        'publicationStatus' => 1,
        
    ];
});
