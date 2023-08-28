<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Event;
use App\Models\Ticket;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    protected $model = Ticket::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $clientIDs = User::where('role','client')->pluck('id')->toArray();
        $eventIDs = count(Event::all());
        return [
            'price' => $this->faker->numberBetween(300,600),
            'etat' => $this->faker->randomElement(['true','false']),
            'used' => $this->faker->randomElement(['true','false']),
            'event_id'  => $this->faker->numberBetween(1,$eventIDs),
            'user_id'  => $this->faker->randomElement($clientIDs),
        ];
    }
}
