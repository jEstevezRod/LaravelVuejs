<?php

namespace App\Http\Controllers;

use DB;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $own_states = State::where('author','=', Auth::user()->getId())->get();
        $states_to_return = [];

        if (count($own_states) <= 0) {
            $default_states = ['queue', 'in progress', 'completed'];
            foreach ($default_states as $state_default){
                $state = new State();
                $state->name = $state_default;
                $state->author = Auth::user()->getId() ? Auth::user()->getId() : null;
                $state->project = null;
                $state->save();
                array_push($states_to_return, $state);
            }
            return [ 'states' => $states_to_return];
        }


        return ['states' => $own_states];
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
        $state = new State();
        $state->name = $request->name;
        $state->author = Auth::user()->getId() ? Auth::user()->getId() : null;
        $state->project = $request->project ? $request->project : null;
        $state->save();

        return [ 'message' => 'State created correctly!', 'state' => $state];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, State $state)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $state)
    {
        //
    }
}
