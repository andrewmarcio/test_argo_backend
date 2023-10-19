<?php

namespace Entities\Task\Services;

interface FinishedTaskServiceInterface {
    public function handle(string $id): void;
}