<?php

namespace Entities\Task\Services;

use Illuminate\Http\Resources\Json\JsonResource;

interface GetAllTasksServiceInterface {
    public function handle(): JsonResource;
}