<?php

namespace Database\Factories;

use App\Models\Perfis;
use Illuminate\Database\Eloquent\Factories\Factory;

class PerfisFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Perfis::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'ListaEstadios' => $this->faker->word,
            'Time' => $this->faker->word,
            'ListaJogos' => $this->faker->word,
        ];
    }
}
