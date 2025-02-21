<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actor>
 */
class ActorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [            
        'nombre' => fake()->name(),
        'direccion' => $this->faker->sentence(),
        'fecha_nacimiento' => now(),
        'email' => fake()->unique()->safeEmail(),
        'telefono' => random_int(610000000,699999999),
        'genero' => $this->faker->randomElement(['masculino','femenino','otro']),

        ];
    }
}
