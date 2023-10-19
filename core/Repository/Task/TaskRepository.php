<?php

namespace Repository\Task;

use Entities\Enum\Status;
use Entities\Task\Task;
use Entities\Task\Repository\TaskRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Repository\BaseRepository;

class TaskRepository extends BaseRepository implements TaskRepositoryInterface
{
    protected string $model = Task::class;

    public function getByStatus(string $status): Collection
    {
        try {
            $tasks = $this->resolvedModel()
                ->when($status, function ($query) use ($status) {
                    $query->whereStatus($status);
                })
                ->get();

            return $tasks;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
