<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskTest extends TestCase
{

    /**
     * Teste de criação de uma nova tarefa
     *
     * @return bool
     */
    public function testCreateTask()
    {
        $taskData = [
            'titulo' => 'Nova Tarefa',
            'descricao' => 'Ir ao Pet Shop.',
            'status' =>  1,
            'user_id' => 1,
        ];

        $response = $this->post('/tasks', $taskData);

        $response->assertStatus(201)
                 ->assertJson($taskData);

        $this->assertDatabaseHas('tasks', $taskData);
    }

    /**
     * Teste para retornar se uma tarefa com o ID fornecido está retornando corretamente
     *
     * @return bool
     */
    public function testGetTaskById()
    {
        $task = factory(App\Models\Task::class)->create();

        $response = $this->get('/tasks/' . $task->id);

        $response->assertStatus(200)
                 ->assertJson([
                     'id' => $task->id,
                     'titulo' => $task->titulo,
                     'descricao' => $task->descricao,
                 ]);
    }

    /**
     * Teste para retornar todas as tarefas com toda a estrutura da tabela Task
     *
     * @return bool
     */
    public function testGetAllTasks()
    {
        $response = $this->get('/tasks');

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     '*' => [
                         'id',
                         'titulo',
                         'descricao',
                         'status',
                         'user_id',
                         'created_at',
                         'updated_at'
                     ]
                 ]);
    }
}
