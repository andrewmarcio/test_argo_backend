<?php

namespace UseCases\Task;

use Entities\Task\Services\DeleteTaskServiceInterface;
use UseCases\Task\BaseTaskService;

class DeleteTaskService extends BaseTaskService implements DeleteTaskServiceInterface
{
    public function handle(string $id): void
    {
        $this->repository->delete($id);
    }
}
