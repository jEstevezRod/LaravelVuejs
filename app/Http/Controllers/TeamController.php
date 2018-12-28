<?php

namespace App\Http\Controllers;

use DB;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = DB::table('teams')
            ->join('team_members','teams.id','=','team_members.team_id')
            ->join('users','team_members.user_id','=','users.id')
            ->select('teams.t_name','teams.id')
            ->where('users.id','=',Auth::user()->getId())
            ->get();

        return [ 'teams' => $teams];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $team = new Team();
        $team->t_name = $request->t_name ? $request->t_name : 'priestrol';
        $team->save();

        return [ 'message' => 'Team created correctly!', 'team' => $team];
    }
}
