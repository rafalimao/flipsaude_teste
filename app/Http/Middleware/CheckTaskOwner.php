<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Task;
use Illuminate\Http\Request;

class CheckTaskOwner
{
    public function handle($request, Closure $next)
    {
        $taskId = $request->route('task'); // Assuming your route parameter is named 'task'
        $task = Task::find($taskId);

        if (!$task || $task->user_id !== auth()->id()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}

