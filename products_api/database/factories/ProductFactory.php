<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo' => $this->faker->unique()->numberBetween(10000000, 999999999),
            'nombre'=>$this->faker->words(3, true),
            'descripcion' =>$this->faker->sentence(10),
            'categoria' => $this->faker->randomElement(['calzado', 'ropa', 'joyeria']),
            'precio'=> $this->faker->numberBetween(100, 1000000),
            'stock' => $this->faker->numberBetween(0, 2500)
        ];
    }
}
