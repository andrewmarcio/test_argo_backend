<?php

namespace UseCases\Task;

use Entities\Task\Services\GetByIdTaskServiceInterface;
use Illuminate\Http\Resources\Json\JsonResource;
use Presentation\Resources\TaskResource;
use UseCases\Task\BaseTaskService;

class GetByIdTaskService extends BaseTaskService implements GetByIdTaskServiceInterface
{
    public function handle(string $id): JsonResource
    {
        return new TaskResource($this->repository->getById($id));
    }
}
