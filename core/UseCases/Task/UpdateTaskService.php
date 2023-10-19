<?php

namespace UseCases\Task;

use Entities\Task\Services\UpdateTaskServiceInterface;
use Illuminate\Http\Resources\Json\JsonResource;
use Presentation\Resources\TaskResource;
use UseCases\Task\BaseTaskService;

class UpdateTaskService extends BaseTaskService implements UpdateTaskServiceInterface
{
    public function handle(string $id, array $data): JsonResource
    {
        return new TaskResource($this->repository->update($id, $data));
    }
}
