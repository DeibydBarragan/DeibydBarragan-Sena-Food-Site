<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Historialpedidos>
 */
class HistorialpedidosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_usuario' => $this->faker->numberBetween(4,103),
            'id_estado' => $this->faker->numberBetween(1,5),
            'id_preparacion' => $this->faker->numberBetween(1,2),
            'id_pago' => $this->faker->numberBetween(1,3),
            'Precio' => $this->faker->numberBetween(500,250000),
        ];
    }
}
