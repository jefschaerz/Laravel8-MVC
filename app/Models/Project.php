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

    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }
}
