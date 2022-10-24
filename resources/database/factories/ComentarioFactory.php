<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentario>
 */
class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Tipo' => $this->faker->word(),
            'Comentario' => $this->faker->text(180),
            'id_estado' => $this->faker->numberBetween(1,3),
            'id_usuario' => $this->faker->numberBetween(4,103),
        ];
    }
}
