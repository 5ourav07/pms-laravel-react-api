<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;

class ProjectAPIController extends Controller
{
    public function show()
    {
        $project = project::all();
        return response()->json(["project" => $project], 200);
    }

    public function get(Request $req)
    {
        $project = project::where('id', $req->id)
        ->first();

        if($project)
        {
            return response()->json($project, 200);
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
            // $folder = "uploadFiles";
            // $f_name = $req->name.time().'.'.$req->file('attachment')->getClientOriginalExtension();
            // $name = $req->file('attachment')->storeAs($folder, $f_name);

            $project = new project();
            $project->title = $req->p_name;
            $project->type = $req->p_type;
            $project->duration = $req->p_time;
            $project->head_id = $req->p_head;
            $project->lead_id = $req->p_lead;
            $project->user1_id = $req->pmember1;
            $project->user2_id = $req->pmember2;
            $project->user3_id = $req->pmember3;
            $project->discription = $req->p_dis;
            //$project->attachment = $name;
            if($project->save())
            {
                return response()->json(["message" => "Project Added Successfully"], 200);
            }
        }
        catch(\Exception $ex)
        {
            return response()->json(["message" => "Could Not Add"], 500);
        }
    }

    public function update(Request $req)
    {
        $project = project::where('id', $req->id)
        ->first();

        if($project)
        {
            // $folder = "uploadFiles";
            // $f_name = $req->name.time().'.'.$req->file('attachment')->getClientOriginalExtension();
            // $name = $req->file('attachment')->storeAs($folder, $f_name);

            $project->title = $req->p_name;
            $project->type = $req->p_type;
            $project->duration = $req->p_time;
            $project->head_id = $req->p_head;
            $project->lead_id = $req->p_lead;
            $project->user1_id = $req->pmember1;
            $project->user2_id = $req->pmember2;
            $project->user3_id = $req->pmember3;
            $project->discription = $req->p_dis;
            //$project->attachment = $name;
            if($project->save())
            {
                return response()->json(["message" => "Project Updated Successfully"], 200);
            }
        }
        else
        {
            return response()->json(["message" => "Not Found"], 404);
        }        
    }

    public function delete(Request $req)
    {
        $project = project::where('id', $req->id)
        ->first();

        if($project)
        {
            $project->delete();
            return response()->json(["message" => "Project Deleted Successfully"], 200);
        }
        else
        {
            return response()->json(["message" => "Not Found"], 404);
        }        
    }
}
