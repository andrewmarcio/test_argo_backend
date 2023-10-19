<?php

namespace Database\Factories;

use Entities\Enum\Status;
use Entities\Task\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Model>
 */
class TaskFactory extends Factory
{

    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->text(50),
            "description" => $this->faker->text(),
            "status" => (random_int(1, 10) % 2) ? Status::PENDING : Status::COMPLETED,
        ];
    }
}
