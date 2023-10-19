<?php

namespace UseCases\Task;

use Entities\Task\Repository\TaskRepositoryInterface;

class BaseTaskService
{
    public function __construct(protected TaskRepositoryInterface $repository)
    {
    }
}
