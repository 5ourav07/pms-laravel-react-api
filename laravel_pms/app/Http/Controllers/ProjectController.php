<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\UserModel;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.user');
    }

    public function createproject()
    {
        $member = UserModel::where('positions', '=', 'User')
        ->select('name', 'id')
        ->get();

        return view('project.create')
        ->with('member', $member);
    }

    public function createprojectsubmit(Request $req)
    {
        $req->validate
        (
            [
                'p_name'=>'required',
                'p_type'=>'required',
                'p_time'=>'required',
                'p_dis'=>'required',
                'pmember1'=>'required',
                'pmember2'=>'required',
                'pmember3'=>'required',
                'attachment'=>'mimes:doc,docx,pdf'
            ],

            [
                'p_name.required' => 'Please provide your project name!',
                'p_type.required' => 'Please provide your project type!',
                'p_time.required' => 'Please provide your project duration!',
                'p_dis.required' => 'Please provide your project description!',
                'pmember1.required' => 'Please provide atleast one member!',
                'attachment.required' => 'Please provide your project attachment!'
            ]
        );
    
        $folder = "uploadFiles";
        $f_name = $req->name.time().'.'.$req->file('attachment')
        ->getClientOriginalExtension();
        $name = $req->file('attachment')
        ->storeAs($folder, $f_name);

        $project = new Project();
        $project->title = $req->p_name;
        $project->type = $req->p_type;
        $project->status = "Open";
        $project->duration = $req->p_time;
        $project->user1_id = $req->pmember1;
        $project->user2_id = $req->pmember2;
        $project->user3_id = $req->pmember3;
        $project->discription = $req->p_dis;
        $project->attachment = $name;
        $project->save();

        return redirect()->route('project-list');
    }

    public function projectlist()
    {
        $projects = Project::all();

        return view('project.list')
        ->with('projects', $projects);
    }

    public function modifyproject($id)
    {
        $project = Project::where('id', '=', $id)
        ->first();
        
        $head = UserModel::where('positions', '=', 'Head')
        ->select('name', 'id')
        ->get();

        $lead = UserModel::where('positions', '=', 'Lead')
        ->select('name', 'id')
        ->get();

        return view('project.details')
        ->with('project', $project)
        ->with('head', $head)
        ->with('lead', $lead);
    }

    public function modifyprojectsubmit(Request $req)
    {
        $p = Project::where('id', '=', $req->id)
        ->first();

        $p->head_id = $req->p_head;
        $p->lead_id = $req->p_lead;
        $p->status = "In-Process";
        $p->save();

        return redirect()->route('project-list');
    }

    public function deleteproject(Request $req)
    {
        $deleteData = Project::where('id', '=', $req->id)
        ->first();

        $deleteData->delete();
        return redirect()->route('project-list');  
    }
}