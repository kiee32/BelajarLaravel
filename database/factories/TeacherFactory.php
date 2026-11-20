<?php

namespace Database\Factories;

use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    protected $model = Teacher::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'niy' => fake()->numerify('##########'),

            'subject_id' => Subject::inRandomOrder()->first()?->id ?? Subject::factory(),
            'start_date' => fake()->date(),
        ];
    }
}
