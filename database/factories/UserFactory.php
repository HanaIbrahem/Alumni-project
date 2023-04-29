<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $enumValues = ['Teacher','Alumni', 'Student'];
        $gender =['male', 'female'];

        $fac = [1,3, 4, 5, 6, 8, 9];
        $work=['yes',''];
        return [
            'name' => fake()->name(1),
            'lname' => fake()->name(1),
            'second_email' => fake()->unique()->safeEmail(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'gender'=> fake()->randomElement($gender),
            'department' => fake()->randomElement($fac),
            'type'=>fake()->randomElement($enumValues),
            'job'=>fake()->randomElement($work),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
