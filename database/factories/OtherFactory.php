<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Other;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Other>
 */
class OtherFactory extends Factory
{
    protected $model = Other::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'designation' => $this->faker->word,
        ];
    }
}
