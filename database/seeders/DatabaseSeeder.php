<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $t = Teacher::create([
            'ci' => 1,
            'name' => 'ADMIN',
            'surname' => 'ADMIN'
        ]);
        User::create([
            'email' => 'admin@example.com',
            'password' => '12345678',
            'teacher_id' => $t->id
        ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
