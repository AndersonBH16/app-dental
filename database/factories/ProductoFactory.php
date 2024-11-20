<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // php artisan make:factory ProductoFactory --model=Producto
        return [
            'codigo' => $this->faker->unique()->regexify('[A-Z0-9]{8}'),
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->sentence(),
            'stock' => $this->faker->numberBetween(0, 500),
            'precio' => $this->faker->randomFloat(2, 1, 10000),
            'marca' => $this->faker->company(),
            'modelo' => $this->faker->word(),
            'serie' => $this->faker->unique()->regexify('[A-Z0-9]{10}'),
            'imagen' => $this->faker->imageUrl(640, 480, 'products', true),
            'categoria_id' => Categoria::inRandomOrder()->first()->id,
            'estado' => $this->faker->randomElement(['activo', 'inactivo']),
        ];
    }
}
