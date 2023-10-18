<?php

namespace Tests\Unit\Task;

use Entities\Task\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Repository\Task\TaskRepository;
use Tests\TestCase;
use UseCases\Task\GetAllTasksService;

class GetAllTaskServiceTest extends TestCase
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
}
