<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.user');
    }

    public function createtask()
    {
        $project = Project::where('status', '=', 'In-Process')
        ->select('title', 'id')
        ->get();

        return view('task.create')
        ->with('project', $project);
    }

    public function createtasksubmit(Request $req)
    {
        $req->validate
        (
            [
                't_name'=>'required',
                't_type'=>'required',
                'p_id'=>'required',
                'date'=>'required',
                'time'=>'required',
                't_dis'=>'required',
            ],

            [
                't_name.required' => 'Please provide your task name!',
                't_type.required' => 'Please provide your task type!',
                'p_id.required' => 'Please provide your project name!',
                'date.required' => 'Please provide your deadline date!',
                'time.required' => 'Please provide your deadline time!',
                't_dis.required' => 'Please provide your task description!',
            ]
        );

        $task = new Task();
        $task->project_id = $req->p_id;
        $task->task_name = $req->t_name;
        $task->type = $req->t_type;
        $task->deadline_date = $req->date;
        $task->deadline_time = $req->time;
        $task->task_dis = $req->t_dis;
        $task->status = "Assigned";
        $task->save();

        return redirect()->route('task-list');
    }

    public function tasklist()
    {
        $task = Task::all();

        return view('task.list')
        ->with('task', $task);
    }

    public function finishedtask($id)
    {
        $task = Task::where('id', '=', $id)
        ->first();

        return view('task.details')
        ->with('task', $task);
    }

    public function finishedtasksubmit(Request $req)
    {
        $p = Task::where('id', '=', $req->id)
        ->first();

        $folder = "TaskuploadFiles";
        $f_name = $req->name.time().'.'.$req->file('attachment')
        ->getClientOriginalExtension();
        $name = $req->file('attachment')
        ->storeAs($folder, $f_name);

        $p->status = "Finished";
        $p->attachment = $name;
        $p->save();

        return redirect()->route('task-list');
    }

    public function deletetask(Request $req)
    {
        $deleteData = Task::where('id', '=', $req->id)
        ->first();

        $deleteData->delete();
        return redirect()->route('task-list');  
    }
}
