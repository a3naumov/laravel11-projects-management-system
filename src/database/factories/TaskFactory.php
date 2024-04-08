<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\Task\Priority;
use App\Enums\Task\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'assigned_user_id' => 1,
            'name' => fake()->sentence(),
            'status' => fake()->randomElement(Status::cases()),
            'priority' => fake()->randomElement(Priority::cases()),
            'description' => fake()->realText(),
            'image_path' => fake()->imageUrl(),
            'due_date' => fake()->dateTimeBetween('now', '+1 year'),
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
