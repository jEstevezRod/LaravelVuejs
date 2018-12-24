<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
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

//        return redirect('home#/dashboard');
        return [ 'message' => 'Team created correctly!'];
    }
}
