<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\News;
use Carbon\Carbon;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;


use Faker\Generator as Faker;

// $factory->define(App\News::class, function (Faker $faker) {
//     return [
//         'type' => $faker->sentence,
//         'image' => $Storage::putFile('public/upload/images/news', new File($faker->image('public/upload/images/news/1758982499619655.png', 400, 300, null, false))),
//         'title' => $faker->sentence,
//         'detail' => $faker->paragraph,
//     ];
// });

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'type' => "k",
            'image' => $Storage::putFile('public/upload/images/news', new File($faker->image('public/upload/images/news/1758982499619655.png', 400, 300, null, false))),
            'title' => "kk",
            'detail' => "k",
        ];
    }
}
