<?php

namespace UseCases\Task;

use Entities\Task\Services\GetAllTasksServiceInterface;
use Illuminate\Http\Resources\Json\JsonResource;
use Presentation\Resources\TaskResource;
use UseCases\Task\BaseTaskService;

class GetAllTasksService extends BaseTaskService implements GetAllTasksServiceInterface
{
    public function handle(): JsonResource
    {
        return TaskResource::collection($this->repository->all());
    }
}
