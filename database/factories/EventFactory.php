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
            'date_start' => $this->faker->date,
            'date_end' => $this->faker->date,
            'start_at' => $this->faker->time('H:i'),
            'end_at' => $this->faker->time('H:i'),
            'authors' => $this->faker->name,
            'nbr_ticket_gen_local' => $this->faker->numberBetween(100,800),
            'nbr_ticket_gen_online' => $this->faker->numberBetween(100,800),
            'nbr_participant' => $this->faker->numberBetween(100,800),
            'nbr_likes'=> $this->faker->numberBetween(100,800),

        ];
    }
}
