<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reclamation;
use App\Models\User;
use App\Models\Event;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reclamation>
 */
class ReclamationFactory extends Factory
{
    protected $model = Reclamation::class;
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
            'message' => $this->faker->paragraph,
            'event_id'  => $this->faker->numberBetween(1,$eventIDs),
            'user_id'  => $this->faker->randomElement($clientIDs),
        ];
    }
}
