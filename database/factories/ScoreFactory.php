<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\MOdels\Score;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Score>
 */
class ScoreFactory extends Factory
{
    protected $model = Score::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'equipe1_goal' => $this->faker->numberBetween(0,9),
            'equipe2_goal' => $this->faker->numberBetween(0,9),

        ];
    }
}
