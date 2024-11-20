<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dni' => $this->faker->numerify('########'),
            'nombres' => $this->faker->name,
            'apellido_paterno' => $this->faker->lastName,
            'apellido_materno' => $this->faker->lastName,
            'genero' => $this->faker->randomElement(['masculino', 'femenino', 'otro']),
            'telefono' => $this->faker->numerify('+579########'),
            'email' => $this->faker->safeEmail,
            'fecha_nacimiento' => $this->faker->date('Y-m-d', '2020-12-31'),
            'direccion' => $this->faker->address,
            'estado' => $this->faker->randomElement(['activo', 'inactivo']),
        ];
    }
}
