<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table="tasks";

    public function taskproject()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}


