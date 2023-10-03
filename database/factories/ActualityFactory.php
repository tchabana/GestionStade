<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Actuality;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actuality>
 */
class ActualityFactory extends Factory
{
    protected $model = Actuality::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'message' => $this->faker->paragraph,
            //'image_path' => public_path("Pape-Gueye.png"),
        ];
    }
}
