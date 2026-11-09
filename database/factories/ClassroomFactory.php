<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassroomFactory extends Factory
{
    protected $model = Classroom::class;

    public function definition(): array
    {
        $level = fake()->randomElement(['X', 'XI', 'XII']);
        $major = fake()->randomElement(['PPLG', 'Animasi', 'DKV']);
        $number = fake()->numberBetween(1, 3);

        return [
            'name' => "{$level} {$major} {$number}",
            'class' => $level,
            'major' => $major,
        ];
    }
}
