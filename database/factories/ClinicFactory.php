<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Clinic;

class ClinicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $clinic = 'Clinica';
        return [
            'name'   => $this->faker->sentence
        ];
    }
}
