<?php

namespace Database\Factories;

use App\Models\Hint;
use Illuminate\Database\Eloquent\Factories\Factory;

class HintFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hint::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(['Moto', 'Carro', 'Caminhão']),
            'brand' => $this->faker->country,
            'model' => $this->faker->city,
            'version' => $this->faker->year,
            'hint' => $this->faker->realText,
            'user_id' => $this->faker->randomDigitNotZero()
        ];
    }
}
