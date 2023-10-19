<?php

namespace Entities\Task\Services;

use Illuminate\Http\Resources\Json\JsonResource;

interface CreateTaskServiceInterface
{
    public function handle(array $data): JsonResource;
}
