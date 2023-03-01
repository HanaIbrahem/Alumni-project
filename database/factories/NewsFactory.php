<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\News;
use Carbon\Carbon;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

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
            //
            'type' => $request->type,
            'image' => $Storage::putFile('public/avatars', new File($faker->image('public/storage/avatars', 400, 300, null, false))),
            'title' => $faker->sentence,
            'detail' => $faker->paragraph,
            'created_at' => Carbon::now()->subDays(rand(1, 30)),
        ];
    }
}
