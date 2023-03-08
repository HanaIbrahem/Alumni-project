<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;


use Faker\Generator as Faker;


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
        $image = UploadedFile::fake()->image('public/upload/images/news/1758982499619655.jpg', 640, 480);
        $path = Storage::putFile('public/upload/images/news', $image);
        
        return [
            'type' =>fake()->sentence(2),
            // 'image' => $Storage::putFile('public/upload/images/news', new File($faker->image('public/upload/images/news/1758982499619655.png', 400, 300, null, false))),
            'title' => fake()->sentence(1),
            'image'=>$path,
            'detail' => fake()->paragraph(200),
        ];
    }
}
