<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Permission>
 */
class PermissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1, // Example range of user IDs
            'date_permission' => $this->faker->date(),
            'reason' => $this->faker->text(),
            'image' => $this->faker->string(),
            'is_approved' => $this->faker->boolean(),
        ];
    }
}
