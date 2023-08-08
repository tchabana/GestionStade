<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Matche;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matche>
 */
class MatcheFactory extends Factory
{
    protected $model = Matche::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'equipe1_name' => $this->faker->name,
            'equipe2_name' => $this->faker->name,
        ];
    }
}
