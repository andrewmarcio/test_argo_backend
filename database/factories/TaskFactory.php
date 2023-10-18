<?php

namespace Database\Factories;

use Entities\Domain\Enum\Status;
use Entities\Domain\Task\Task;
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
            "title" => $this->faker->title(),
            "description" => $this->faker->text(),
            "status" => Status::PENDING,
        ];
    }
}
