<?php

namespace Entities\Services\Task;

use Illuminate\Http\Resources\Json\JsonResource;

interface GetAllTasksServiceInterface {
    public function handle(): JsonResource;
}