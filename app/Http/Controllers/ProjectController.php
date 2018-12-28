<?php

namespace App\Http\Controllers;

use DB;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProjectController extends Controller
{
    public function index() {

        $projects = DB::table('project_users')
            ->join('users','project_users.user_id','=','users.id')
            ->join('projects','projects.id','=','project_users.project_id')
            ->select('projects.p_name','projects.id')
            ->where('users.id','=',Auth::user()->getId())
            ->get();

        return [ 'projects' => $projects];
    }

    public function store(Request $request) {
        $project = new Project();
        $project->p_name = $request->name;
        $project->team_id = $request->team ? $request->team : null;
        $project->save();

        return [ 'message' => 'Project created correctly!', 'project' => $project];
    }


}
