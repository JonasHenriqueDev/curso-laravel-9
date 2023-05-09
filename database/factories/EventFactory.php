<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(2),
            'city' => $this->faker->city(),
            'private' => $this->faker->boolean(),
            'event_date' => $this->faker->date(),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->word(1)
            // não funciona muito bem
            // 'image' => $this->faker->image('../img-eventos/', 640, 480, 'events', true, 'png')
        ];
    }
}
