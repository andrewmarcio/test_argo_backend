<?php

namespace Entities\Task\Services;

use Illuminate\Http\Resources\Json\JsonResource;

interface GetByIdTaskServiceInterface
{
    public function handle(string $id): JsonResource;
}
