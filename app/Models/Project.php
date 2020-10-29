<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Possible pour faire du eager loading et il préchargera les tâches :
    // protected $with = ['tasks'];

    protected $fillable = ['name'];

    // Permet d'indiquer la contraintes que un projet peut avoir plusieurs tasks
    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }
}
