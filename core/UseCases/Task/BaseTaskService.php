<?php

namespace UserCases\Task;

use Entities\Repository\Task\TaskRepositoryInterface;

class BaseTaskService
{
    public function __construct(protected TaskRepositoryInterface $repository)
    {
    }
}
