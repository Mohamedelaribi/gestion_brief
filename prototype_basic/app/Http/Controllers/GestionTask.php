<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class GestionTask extends Controller
{

    public function index()
    {
        
    }


    public function create($id)
    {
        return view('task.task',compact('id'));
    }

    public function store(Request $request)
    {
        $task = new Task();
        $task->taskName = $request->input('taskName');
        $task->startDate = $request->input('startDate');
        $task->endDate = $request->input('endDate');
        $task->brief_id = $request->input('idBrief');
        $task->save();

        return redirect()->route('brief.index');
    }

    public function show($id)
    {
        
    }


    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {
        
    }


    public function destroy($id)
    {
        
    }
}
