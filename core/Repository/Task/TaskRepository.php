<?php

namespace Repository\Task;

use Entities\Domain\Task\Task;
use Entities\Repository\Task\TaskRepositoryInterface;
use Repository\BaseRepository;

class TaskRepository extends BaseRepository implements TaskRepositoryInterface
{
    protected string $model = Task::class; 
}
