<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'date_permission' => $this->faker->date(),
            'reason' => $this->faker->time(),
            'image' => $this->faker->time(),
            'is_approved' => $this->faker->latitude() . ',' . $this->faker->longitude(),
        ];
    }
}
