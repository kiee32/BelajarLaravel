<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'name' => $this->faker->name(),
        'niy' => $this->faker->numberBetween(1000000000, 9999999999), 
        'subjects' => $this->faker->word(),
        'start_date' => $this->faker->date(),
    ];
}

}
