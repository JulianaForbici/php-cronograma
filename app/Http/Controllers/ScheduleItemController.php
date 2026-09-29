<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScheduleItemRequest;
use App\Models\ScheduleItem;
use Illuminate\Http\JsonResponse;

class ScheduleItemController extends Controller
{
    public function store(StoreScheduleItemRequest $request): JsonResponse
    {
        $item = ScheduleItem::create($request->validated());
        return response()->json($item, 201);
    }

    public function update(StoreScheduleItemRequest $request, ScheduleItem $scheduleItem): JsonResponse
    {
        $scheduleItem->update($request->validated());
        return response()->json($scheduleItem);
    }

    public function destroy(ScheduleItem $scheduleItem): JsonResponse
    {
        $scheduleItem->delete();
        return response()->json(null, 204);
    }
}
