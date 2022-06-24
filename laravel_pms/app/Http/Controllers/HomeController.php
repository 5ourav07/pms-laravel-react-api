<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\UserInfoModel;
use App\Models\UserModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.user');
    }

    public function dashboard()
    {
        $user_count = UserModel::count();
        $project_count = Project::count();
        $task_count = Task::count();
        $pending_count = UserInfoModel::count();

        return view('heads.dashboard')
        ->with('user_count', $user_count)
        ->with('project_count', $project_count)
        ->with('task_count', $task_count)
        ->with('pending_count', $pending_count);
    }
}
