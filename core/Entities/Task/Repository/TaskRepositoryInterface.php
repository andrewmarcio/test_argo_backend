<?php

namespace Entities\Task\Repository;

use Entities\Repository\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

interface TaskRepositoryInterface extends BaseRepositoryInterface
{
    public function getByStatus(string $status): Collection;
}
