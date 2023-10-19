<?php

namespace UseCases\Task;

use Entities\Task\Services\GetByStatusTasksServiceInterface;
use Illuminate\Http\Resources\Json\JsonResource;
use Presentation\Resources\TaskResource;
use UseCases\Task\BaseTaskService;

class GetByStatusTasksService extends BaseTaskService implements GetByStatusTasksServiceInterface
{
    public function handle(string $status): JsonResource
    {
        return TaskResource::collection($this->repository->getByStatus($status));
    }
}
