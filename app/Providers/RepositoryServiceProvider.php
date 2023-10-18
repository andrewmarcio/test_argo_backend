<?php

namespace App\Providers;

use Entities\Task\Repository\TaskRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Repository\Task\TaskRepository;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(TaskRepositoryInterface::class, TaskRepository::class);
    }
}
