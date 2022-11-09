<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Brief;

class GestionTask extends Controller
{

    public function index()
    {
        // $tasks = Brief::all();
        // return view('welcome',compact('tasks'));
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
        $task = Task::find($id);
        return view('task.edit',compact('task'));

    }


    public function update(Request $request, $id)
    {
        $updateBrief = Task::find($id);
        $updateBrief->nameBrief = $request->input('newnameTask');
        $updateBrief->starDate = $request->input('newstartDate');
        $updateBrief->endDate = $request->input('newendDate');
        $updateBrief->save();
        return redirect()->route('brief.index');
    }


    public function destroy($id)
    {
        
    }

}
