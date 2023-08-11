<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Event;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    protected $model = Event::class;
    /**
     * Define the model's default state.
     * 
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'date_on' => $this->faker->date,
            'start_at' => $this->faker->time('H:i'),
            'end_at' => $this->faker->time('H:i'),
            'authors' => $this->faker->name,
            'nbr_participant' => $this->faker->numberBetween(100,800),
        ];
    }
}
