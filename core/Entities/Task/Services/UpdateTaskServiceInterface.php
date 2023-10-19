<?php

namespace Entities\Task\Services;

use Illuminate\Http\Resources\Json\JsonResource;

interface UpdateTaskServiceInterface
{
    public function handle(string $id, array $data): JsonResource;
}
