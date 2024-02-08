<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // Método para exibir todas as tarefas
    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }

    // Método para exibir uma tarefa específica
    public function show(Task $task)
    {
        return response()->json($task);
    }

    // Método para armazenar uma nova tarefa
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'status' => 'required',
            'user_id' => 'required',
        ]);

        $task = Task::create($request->all());
        return response()->json($task, 201);
    }

    // Método para atualizar uma tarefa existente
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return response()->json($task, 200);
    }

    // Método para excluir uma tarefa existente
    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(null, 204);
    }
}
