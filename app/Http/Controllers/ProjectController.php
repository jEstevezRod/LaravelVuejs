<?php

namespace App\Http\Controllers;

use App\ProjectUser;
use App\State;
use DB;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index()
    {

        $projects = DB::table('project_users')
            ->join('users', 'project_users.user_id', '=', 'users.id')
            ->join('projects', 'projects.id', '=', 'project_users.project_id')
            ->select('projects.p_name', 'projects.id')
            ->where('users.id', '=', Auth::user()->getId())
            ->get();

        $states_array = [];

        if (count($projects) <= 0) {
            $name = str_replace(' ', '-', Auth::user()->getName());
            $default_project = $name . '-project';
            $project = new Project();
            $project->p_name = $default_project;
            $project->team_id = null;
            $project->save();

            $userInProject = new ProjectUser();
            $userInProject->user_id = Auth::user()->getId();
            $userInProject->project_id = $project->id;
            $userInProject->save();

            $states_to_return = [];
            $default_states = ['queue', 'in progress', 'completed'];
            foreach ($default_states as $state_default) {
                $state = new State();
                $state->name = $state_default;
                $state->author = Auth::user()->getId();
                $state->project = $project->id;
                $state->save();
                array_push($states_to_return, $state);
            }

            return ['projects' => array($project), 'states' => $states_to_return];
        }

        return ['projects' => $projects, 'states' => $states_array];
    }

    public function store(Request $request)
    {
        $project = new Project();
        $project->p_name = $request->name;
        $project->team_id = $request->team ? $request->team : null;
        $project->save();

        $states_to_return = [];
        $default_states = ['queue', 'in progress', 'completed'];
        foreach ($default_states as $state_default) {
            $state = new State();
            $state->name = $state_default;
            $state->author = Auth::user()->getId();
            $state->project = $project->id;
            $state->save();
            array_push($states_to_return, $state);
        }

        return ['message' => 'Project created correctly!', 'project' => $project];
    }

    public function show($value)
    {

        $tasks = DB::table('tasks')
            ->join('projects', 'tasks.project_id', '=', 'projects.id')
            ->select('tasks.subject')
            ->where('projects.id', '=', $value)
            ->get();

        $states = DB::table('states')
            ->join('projects', 'states.project', '=', 'projects.id')
            ->select('states.name')
            ->where('projects.id', '=', $value)
            ->get();

        return ['message' => $value, 'tasks' => $tasks, 'states' => $states];
    }


}
