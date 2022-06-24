<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table="users_info";

    public function projects()
    {
        return $this->hasMany(Project::class, 'project_id');
    }

    public function members()
    {
        return $this->hasMany(UserModel::class, 'member_id', 'positions = User');
    }
}
