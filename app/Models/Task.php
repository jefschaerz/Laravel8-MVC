<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable =['name'];

    // Permet d'utiliser $task->project()-> associate... task pou lier la tâche à un projet.
    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }

}
