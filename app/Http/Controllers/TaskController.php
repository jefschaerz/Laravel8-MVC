<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Créé par php artisan make:controller TaskController
class TaskController extends Controller
{
    // Use local db for demo only
    private $tasks;
    public function __construct() {
        // Fill table with some values
        $this->tasks = collect([
        ['id' => 2, 'name' => 'Learn Laravel', 'duration' => 12],
        ['id' => 3, 'name' => 'Learn RubyOnRails', 'duration' => 24]
        ])->keyBy('id');
    }

    // Actions = fonction de la class en php
    // public function showTask() {
    //     return 'Task list by controller with id ' . $id ;
    // }

    // Will use view task.index with some parameters
    public function index() {
        //Works : return "Dans TaskController index";
        return view('task.index')->with('tasks', $this->tasks);
    }

    // Will use view task.show  with some parameters
    public function show($task) {
        // To debug : return 'Test show Task';
        // DB access to retrieve tash with ID
        return view('task.show')->with('task', $this->tasks[$task]);
    }
}
