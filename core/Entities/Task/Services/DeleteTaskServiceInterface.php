<?php

namespace Entities\Task\Services;

interface DeleteTaskServiceInterface
{
    public function handle(string $id): void;
}
