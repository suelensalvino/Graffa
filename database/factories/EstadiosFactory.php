<?php

namespace Database\Factories;

use App\Models\Estadios;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstadiosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Estadios::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'Descricao' => $this->faker->word,
            'Nome' => $this->faker->word,
            'Jogo' => $this->faker->word,
            'Local' => $this->faker->word,
        ];
    }
}
