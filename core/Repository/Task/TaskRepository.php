<?php

namespace Repository\Task;

use Entities\Task\Task;
use Entities\Task\Repository\TaskRepositoryInterface;
use Repository\BaseRepository;

class TaskRepository extends BaseRepository implements TaskRepositoryInterface
{
    protected string $model = Task::class; 
}
