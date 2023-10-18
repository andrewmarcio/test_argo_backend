<?php

namespace Entities\Repository;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    public function all(): Collection;
    public function getById(string $id): Model;
    public function create(array $data): Model;
    public function update(string $id, array $data): Model;
    public function delete(string $id): void;
}
