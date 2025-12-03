<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTypesSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['description' => 'Administrador'],
            ['description' => 'Morador'],
            ['description' => 'Síndico'],
        ];

        foreach ($types as $type) {
            UserType::firstOrCreate(['description' => $type['description']]);
        }
    }
}
