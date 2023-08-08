<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Event;
use App\Models\Comment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    protected $model = Comment::class;
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
