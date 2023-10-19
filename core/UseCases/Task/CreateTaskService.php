<?php

namespace UseCases\Task;

use Entities\Task\Services\CreateTaskServiceInterface;
use Illuminate\Http\Resources\Json\JsonResource;
use Presentation\Resources\TaskResource;
use UseCases\Task\BaseTaskService;

class CreateTaskService extends BaseTaskService implements CreateTaskServiceInterface
{
    public function handle(array $data): JsonResource
    {
        return new TaskResource($this->repository->create($data));
    }
}
