<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Task ;

class TaskControllerTest extends TestCase
{
    // Clear et recharger la db
    use RefreshDatabase;

    public function testShow()
    {
        // Création d'une task fake en utilisant une factory pour le model pour générer des données de tests
        $task = Task::factory()-> make();

        $response = $this->get('/tasks/' . $task->id);
        $response->assertStatus(200);
    }

    public function testIndex()
    {
        $response = $this->get('/tasks');

        $response->assertStatus(200);
        $response->assertViewHas('tasks');
    }

    public function testShowUnexistingTask()
    {
        $response = $this->get('/tasks/1234');

        $response->assertStatus(404);

    }

    public function testCreateNewTask()
    {
        $response = $this->post('/tasks', ['name' =>'Pipo']);

        $response->assertStatus(200);
        $response->assertViewHas('task');

    }

    public function testCreateNewTaskEmptyName()
    {
        $response = $this->post('/tasks', ['name' =>'']);

        $response->assertStatus(302);
    }
}

