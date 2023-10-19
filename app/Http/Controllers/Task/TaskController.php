<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\TaskRequest;
use Entities\Task\Services\CreateTaskServiceInterface;
use Entities\Task\Services\DeleteTaskServiceInterface;
use Entities\Task\Services\FinishedTaskServiceInterface;
use Entities\Task\Services\GetAllTasksServiceInterface;
use Entities\Task\Services\GetByIdTaskServiceInterface;
use Entities\Task\Services\GetByStatusTasksServiceInterface;
use Entities\Task\Services\UpdateTaskServiceInterface;
use Illuminate\Http\JsonResponse;

class TaskController extends Controller
{
    public function __construct(
        private GetAllTasksServiceInterface $getAllService,
        private GetByStatusTasksServiceInterface $getByStatusService,
        private GetByIdTaskServiceInterface $getByIdService,
        private CreateTaskServiceInterface $createService,
        private UpdateTaskServiceInterface $updateService,
        private DeleteTaskServiceInterface $deleteService,
        private FinishedTaskServiceInterface $finishedTaskServiceInterface
    ) {
    }

    public function index(): JsonResponse
    {
        return new JsonResponse($this->getAllService->handle(), JsonResponse::HTTP_OK);
    }

    public function getByStatus(string $status): JsonResponse
    {
        return new JsonResponse($this->getByStatusService->handle($status), JsonResponse::HTTP_OK);
    }

    public function show(string $id): JsonResponse
    {
        return new JsonResponse($this->getByIdService->handle($id), JsonResponse::HTTP_OK);
    }

    public function store(TaskRequest $request): JsonResponse
    {
        return new JsonResponse($this->createService->handle($request->validated()), JsonResponse::HTTP_CREATED);
    }

    public function update(string $id, TaskRequest $request): JsonResponse
    {
        return new JsonResponse($this->updateService->handle($id, $request->validated()), JsonResponse::HTTP_OK);
    }

    public function destroy(string $id): JsonResponse
    {
        return new JsonResponse($this->deleteService->handle($id), JsonResponse::HTTP_NO_CONTENT);
    }

    public function finishedTask(string $id): JsonResponse
    {
        $this->finishedTaskServiceInterface->handle($id);
        return new JsonResponse([
            "message" => "Task finished",
        ], JsonResponse::HTTP_OK);
    }
}
