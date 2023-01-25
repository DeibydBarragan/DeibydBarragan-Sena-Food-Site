<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedidos>
 */
class PedidosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_pedido' => $this->faker->numberBetween(1,148),
            'id_producto' => $this->faker->numberBetween(1,64),
            'Cantidad' => $this->faker->numberBetween(1,5),
        ];
    }
}
