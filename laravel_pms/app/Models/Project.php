<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table="open_projects";

    public function projecttasks()
    {
        return $this->hasMany(Task::class, 'project_id');
    }
}
