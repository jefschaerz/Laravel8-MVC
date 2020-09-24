<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Créé par php artisan make:controller TaskController
class TaskController extends Controller
{
    private $tasks;

    //Simulation des données
    public function __construct() {

           $this->tasks = collect([
            ['id' => 2, 'name' => 'Learn Laravel', 'duration' => 12],
            ['id' => 3, 'name' => 'Learn RubyOnRails', 'duration' => 24]
            ])->keyBy('id');
    }

    // Actions = fonction de la class en php
    // public function showTask() {
    //     return 'Task list by controller with id ' . $id ;
    // }

    // Call  view of taks
    // public function index() {
    //     return view('task.index')->with(['tasks' => $this->tasks], ['test' => 'test2']) ;
    // }

    public function index() {
        return view('task.index')->with('tasks', $this->tasks)
                                ->with('test', 'test2');
    }
}
