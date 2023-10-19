<?php

namespace App\Providers;
use Entities\Task\Services\CreateTaskServiceInterface;
use Entities\Task\Services\DeleteTaskServiceInterface;
use Entities\Task\Services\FinishedTaskServiceInterface;
use Entities\Task\Services\GetAllTasksServiceInterface;
use Entities\Task\Services\GetByIdTaskServiceInterface;
use Entities\Task\Services\GetByStatusTasksServiceInterface;
use Entities\Task\Services\UpdateTaskServiceInterface;
use Illuminate\Support\ServiceProvider;
use UseCases\Task\CreateTaskService;
use UseCases\Task\DeleteTaskService;
use UseCases\Task\FinishedTaskService;
use UseCases\Task\GetAllTasksService;
use UseCases\Task\GetByIdTaskService;
use UseCases\Task\GetByStatusTasksService;
use UseCases\Task\UpdateTaskService;

class ServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(GetAllTasksServiceInterface::class, GetAllTasksService::class);
        $this->app->bind(GetByStatusTasksServiceInterface::class, GetByStatusTasksService::class);
        $this->app->bind(GetByIdTaskServiceInterface::class, GetByIdTaskService::class);
        $this->app->bind(CreateTaskServiceInterface::class, CreateTaskService::class);
        $this->app->bind(UpdateTaskServiceInterface::class, UpdateTaskService::class);
        $this->app->bind(DeleteTaskServiceInterface::class, DeleteTaskService::class);
        $this->app->bind(FinishedTaskServiceInterface::class, FinishedTaskService::class);
    }
}
