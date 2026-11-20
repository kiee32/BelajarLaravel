<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subject;
use App\Models\Teacher;

class SubjectFactory extends Factory
{
    protected $model = Subject::class;

    protected static int $index = 0;

    public function definition(): array
    {
        $teachers = Teacher::pluck('id')->toArray();

        $teacherId = null;
        if (!empty($teachers)) {
            $teacherId = $teachers[self::$index % count($teachers)];
            self::$index++;
        }

        return [
            'name' => $this->faker->randomElement([
                'Matematika',
                'Bahasa Indonesia',
                'Bahasa Inggris',
                'Fisika',
                'Kimia',
                'Biologi',
                'Sejarah',
                'Geografi',
                'Ekonomi',
                'Seni Budaya'
            ]),
            'teacher_id' => $teacherId,
        ];
    }
}
