<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class TaskAPIController extends Controller
{
    public function show()
    {
        $task = task::all();
        return response()->json(["task" => $task], 200);
    }

    public function get(Request $req)
    {
        $task = task::where('id', $req->id)
        ->first();

        if($task)
        {
            return response()->json($task, 200);
        }
        else
        {
            return response()->json(["message" => "Not Found"], 404);
        }        
    }

    public function add(Request $req)
    {
        try
        {
            $task = new Task();
            $task->project_id = $req->p_id;
            $task->task_name = $req->t_name;
            $task->type = $req->t_type;
            $task->deadline_date = $req->date;
            $task->deadline_time = $req->time;
            $task->task_dis = $req->t_dis;
            if($task->save())
            {
                return response()->json(["message" => "task Added Successfully"], 200);
            }
        }
        catch(\Exception $ex)
        {
            return response()->json(["message" => "Could Not Add"], 500);
        }
    }

    public function update(Request $req)
    {
        $task = task::where('id', $req->id)
        ->first();

        if($task)
        {
            $task->project_id = $req->p_id;
            $task->task_name = $req->t_name;
            $task->type = $req->t_type;
            $task->deadline_date = $req->date;
            $task->deadline_time = $req->time;
            $task->task_dis = $req->t_dis;
            if($task->save())
            {
                return response()->json(["message" => "task Updated Successfully"], 200);
            }
        }
        else
        {
            return response()->json(["message" => "Not Found"], 404);
        }        
    }

    public function delete(Request $req)
    {
        $task = task::where('id', $req->id)
        ->first();

        if($task)
        {
            $task->delete();
            return response()->json(["message" => "task Deleted Successfully"], 200);
        }
        else
        {
            return response()->json(["message" => "Not Found"], 404);
        }        
    }
}
