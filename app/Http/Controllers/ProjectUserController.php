<?php

namespace App\Http\Controllers;

use App\ProjectUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = ProjectUser::where('user_id','=', Auth::user()->getId())->get();

        return [ 'projects' => $projects];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (empty($request->email)) {
            $userInProject = new ProjectUser();
            $userInProject->user_id = Auth::user()->getId();
            $userInProject->project_id = $request->project_id;
            $userInProject->save();

            return ['message' => 'New entry stored correctly', 'userInProject' => $userInProject];
        } elseif (!empty($request->email)) {

            $id = User::where('email', $request->email)->first()->id;

            $userInProject = new ProjectUser();
            $userInProject->user_id = $id;
            $userInProject->project_id = $request->project_id;
            $userInProject->save();

            return ['message' => 'New entry stored correctly', 'userInProject' => $userInProject];
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjectUser  $projectUser
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectUser $projectUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectUser  $projectUser
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectUser $projectUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectUser  $projectUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectUser $projectUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectUser  $projectUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectUser $projectUser)
    {
        //
    }
}
