<?php

namespace Entities\Task\Services;

use Illuminate\Http\Resources\Json\JsonResource;

interface GetByStatusTasksServiceInterface {
    public function handle(string $status): JsonResource;
}