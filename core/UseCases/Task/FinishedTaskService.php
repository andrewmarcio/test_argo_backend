<?php

namespace UseCases\Task;

use Entities\Enum\Status;
use Entities\Task\Services\FinishedTaskServiceInterface;

class FinishedTaskService extends BaseTaskService implements FinishedTaskServiceInterface
{
    public function handle(string $id): void
    {
        $this->repository->update($id, ["status" => Status::COMPLETED]);
    }
}
