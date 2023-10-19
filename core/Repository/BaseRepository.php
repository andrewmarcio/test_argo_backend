<?php

namespace Repository;

use Entities\Repository\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BaseRepository implements BaseRepositoryInterface
{
    protected string $model;

    public function all(): Collection
    {
        try {
            return $this->resolvedModel()->all();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getById(string $id): Model
    {
        try {
            return $this->resolvedModel()->findOrFail($id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create(array $data): Model
    {
        try {
            DB::beginTransaction();

            $model = $this->resolvedModel()->create($data);

            DB::commit();
            return $model;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }


    public function update(string $id, array $data): Model
    {
        try {
            DB::beginTransaction();
            $model = $this->getById($id);
            $model->update($data);
            DB::commit();
            return $model;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function delete(string $id): void
    {
        try {
            DB::beginTransaction();
            $model = $this->getById($id);
            $model->delete();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    protected function resolvedModel(): Model
    {
        return app($this->model);
    }
}
