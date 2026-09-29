<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScheduleRequest;
use App\Models\Schedule;
use Illuminate\Http\JsonResponse;

class ScheduleController extends Controller
{
    public function index(): JsonResponse
    {
        $schedules = Schedule::with('items')->get();
        return response()->json($schedules);
    }

    public function store(StoreScheduleRequest $request): JsonResponse
    {
        $schedule = Schedule::create($request->validated());
        return response()->json($schedule, 201);
    }

    public function show(Schedule $schedule): JsonResponse
    {
        return response()->json($schedule->load('items.responsible'));
    }

    public function update(StoreScheduleRequest $request, Schedule $schedule): JsonResponse
    {
        $schedule->update($request->validated());
        return response()->json($schedule);
    }

    public function destroy(Schedule $schedule): JsonResponse
    {
        $schedule->delete();
        return response()->json(null, 204);
    }
}
