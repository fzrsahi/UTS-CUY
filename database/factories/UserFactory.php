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
        $role = $this->faker->randomElement(['admin', 'karyawan']);

        return [
            'name' => $this->faker->name,
            'username' => ($role === 'admin') ? 'admin' : $this->faker->userName,
            'password' => bcrypt('password123'), // Ganti dengan password yang kamu inginkan
            'role' => $role,
            'foto' => $this->faker->imageUrl(200, 200), // Contoh link foto dari Faker
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
