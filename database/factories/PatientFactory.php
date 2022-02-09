<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reg_user_id' => User::all()->random()->id,
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'middle_name' => $this->faker->name(),
            'birth_day' => $this->faker->date(),
            'phone_number' => $this->faker->numerify('#########'),
        ];
    }
}
