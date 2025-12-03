<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserType;
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
        // Seed default user types then create example users.
        $this->call(UserTypesSeeder::class);

        $adminType = UserType::where('description', 'Administrador')->first();
        $residentType = UserType::where('description', 'Morador')->first();

        // Create some sample users with explicit user types
        // Default password for all seeded users: 'password'
        User::factory()->create([
            'name' => 'Administrador Test',
            'email' => 'admin@example.com',
            'user_type_id' => $adminType?->id,
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'user_type_id' => $residentType?->id,
        ]);
    }
}
