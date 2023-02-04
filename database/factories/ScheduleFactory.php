<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'turno' => $this->faker->randomElement($array = array ('mañana','tarde')),
            'horas' => $this->faker->randomElement($array = array ('08:00 AM','09:00 AM','10:00 AM','11:00 AM', '12:00 AM', '01:00 PM','02:00 PM')),
            'fecha' => $this->faker->randomElement($array = array ('02/03/22','03/03/22','04/03/22','05/03/22', '06/03/22', '07/03/22','08/03/22'))
        ];
    }
}
