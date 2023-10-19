<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use UseCases\Task\GetAllTasksService;

class TaskController extends Controller
{
    public function __construct(private GetAllTasksService $service)
    {
    }

    public function index(): JsonResponse
    {
        return new JsonResponse($this->service->handle(), JsonResponse::HTTP_OK);
    }
}
