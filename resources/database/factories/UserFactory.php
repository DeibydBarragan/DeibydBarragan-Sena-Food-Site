<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->name,
            'Apellidos' => $this->faker->name,
            'Correo' => $this->faker->email(),
            'Contrasena' => md5($this->faker->password()),
            'id_centro' => $this->faker->numberBetween(1,3),
            'id_tipousuario' => $this->faker->numberBetween(2,3),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
