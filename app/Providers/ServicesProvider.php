<?php

namespace App\Providers;

use Entities\Task\Services\GetAllTasksServiceInterface;
use Illuminate\Support\ServiceProvider;
use UseCases\Task\GetAllTasksService;

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
    }
}
