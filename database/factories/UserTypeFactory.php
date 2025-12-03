<?php

namespace Database\Factories;

use App\Models\UserType;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserTypeFactory extends Factory
{
    protected $model = UserType::class;

    public function definition()
    {
        return [
            'description' => $this->faker->words(2, true),
            // remember_token will be nullable by default; factories can set it if needed
        ];
    }
}
