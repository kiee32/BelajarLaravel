<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat data dummy untuk Student
        \App\Models\Student::factory(10)->create();

        // Menggunakan updateOrCreate agar aman jika dijalankan berulang kali
        User::updateOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'), // Pastikan password ter-hash dengan baik
            ]
        );

        // Membuat data Subject dan Teacher
        \App\Models\Subject::factory(10)->create();
        \App\Models\Teacher::factory(10)->create();

        // Memanggil ClassroomSeeder
        $this->call([
            ClassroomSeeder::class,
        ]);
    }
}
