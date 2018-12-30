<?php

namespace App\Http\Controllers;

use DB;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Response;

class TaskController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::where('author','=', Auth::user()->getId())->get();

        return [ 'tasks' => $tasks];
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
     * @return mixed
     */
    public function store(Request $request)
    {
        $task = new Task();
        $task->author = Auth::user()->getId() ;
        $task->project_id = $request->project_id ? $request->project_id : null;
        $task->subject = $request->subject ? $request->subject : 'subject default';
        $task->description = $request->description ? $request->description : 'desc default';
        $task->state = $request->state ? $request->state : 'queue';
        $task->save();

        return [ 'message' => 'Task created correctly!', 'task' => $task];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */

    public function updates(Request $request, $id, $state)
    {


        DB::table('tasks')
            ->where('id', $id)
            ->update(['state' => $state]);

        return [ 'message' => 'Task nº '. $id .' moved to '. $state];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
