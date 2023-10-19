<?php

namespace Tests\Unit\Task;

use Entities\Task\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Repository\Task\TaskRepository;
use Tests\TestCase;
use UseCases\Task\{CreateTaskService, GetAllTasksService, GetByIdTaskService, UpdateTaskService};

class TaskServicesTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Should be a return list of all tasks
     */
    public function test_get_all_tasks(): void
    {
        Task::factory(2)->create();
        $service = new GetAllTasksService(new TaskRepository);
        $this->assertEquals(2, $service->handle()->count());
    }

    /**
     * Should be a return list of all tasks
     */
    public function test_get_by_id(): void
    {
        $task = Task::factory(1)->create()->first();
        $service = new GetByIdTaskService(new TaskRepository);
        $this->assertEquals(1, $service->handle($task->id)->count());
    }

    /**
     * Should be a return list of all tasks
     */
    public function test_create(): void
    {
        $payload = [
            "title" => $this->faker->text(50),
            "description" => $this->faker->text(),
        ];
        $service = new CreateTaskService(new TaskRepository);
        $data = $service->handle($payload);
        $this->assertEquals($payload, ["title" => $data->title, "description" => $data->description]);
    }

    /**
     * Should be a return list of all tasks
     */
    public function test_update(): void
    {
        $payload = [
            "title" => $this->faker->text(50),
            "description" => $this->faker->text(),
        ];
        $task = Task::factory(1)->create()->first();
        $service = new UpdateTaskService(new TaskRepository);
        $data = $service->handle($task->id, $payload);
        $this->assertEquals($payload, ["title" => $data->title, "description" => $data->description]);
    }
}
