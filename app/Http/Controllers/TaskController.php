<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use App\Models\Task;
use Illuminate\Http\Request;

// Créé par la commande : php artisan make:controller TaskController
class TaskController extends Controller
{
        // Will use view task.index with some parameters
    public function index() {
        //Works : return "Dans TaskController index";
        //$tasks = Task::all();
        $tasks =Task::paginate(4);
        return view('task.index')->with('tasks', $tasks);
    }

    // Will use view task.show  with some parameters
    public function show($task) {
        // To debug : return 'Test show Task';
        // DB access to retrieve tash with ID
        $task = Task::find($task);
        return view('task.show')->with('task', $task);
    }

    public function create(){
        return view('task.create');
    }

    public function store(TaskStoreRequest $request){

        // Validation (pas trop recommandé), plutôt FormRequest
        // $this->validate($request,[
        //     'name' => 'required|max:255',
        // ]);

        //TODO : $task->project()->associate($current_projet)
        $task = Task::create($request->all());
        return view('task.show')->with('task', $task);
    }

    public function destroy($task){
        $task = Task::find($task);
        $task-> delete();
        return redirect(route('tasks.index'));
    }
}
