<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'          => $this->faker->name(),
            'employee_id'   => rand(200000000, 200099999),
            'position'      => $this->faker->jobTitle(),
            'address'       => $this->faker->address(),
            'phone'         => $this->faker->phoneNumber(),
            'email'         => $this->faker->unique()->safeEmail(),
        ];
    }
}
