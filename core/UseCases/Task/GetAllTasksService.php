<?php

namespace UseCases\Task;

use Entities\Services\Task\GetAllTasksServiceInterface;
use Illuminate\Http\Resources\Json\JsonResource;
use Presentation\Resources\TaskResource;
use UseCases\Task\BaseTaskService;

class GetAllTasksService extends BaseTaskService implements GetAllTasksServiceInterface
{
    public function handle(): JsonResource
    {
        return new TaskResource($this->repository->all());
    }
}
