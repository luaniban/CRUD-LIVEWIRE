<?php

namespace Database\Factories;

use App\Models\Escola;
use Illuminate\Database\Eloquent\Factories\Factory;

class EscolaFactory extends Factory
{
    protected $model = Escola::class;

    public function definition()
    {
        return [
            'serie' => $this->faker->randomElement(['1º ano', '2º ano', '3º ano']),
            'bimestre' => $this->faker->numberBetween(1, 4),
            'linguagem' => $this->faker->word(),
            'codigo' => $this->faker->unique()->numerify('ESC###'),
            'descricao' => $this->faker->sentence(),
            'objeto_conhecimento' => $this->faker->paragraph(),
            'discplina_id' => $this->faker->numberBetween(1, 10),
            'nivel_ensino' => $this->faker->randomElement(['Fundamental 2',  'Polivalente']),
            'origem' => $this->faker->numberBetween(1, 100),
        ];
    }
}
