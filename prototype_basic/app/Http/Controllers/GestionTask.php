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

        return redirect('brief'."/".$request->input('idBrief')."/edit");
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
        $updateTak = Task::find($id);
        $updateTak->taskName = $request->input('newnameTask');
        $updateTak->startDate = $request->input('newstartDate');
        $updateTak->endDate = $request->input('newendDate');
        $updateTak->save();
        return redirect('brief'."/".$updateTak->brief_id."/edit");
    }


    public function destroy($id)
    {
        $task = Task::find($id);
        $task::destroy($id);
        return redirect('brief'."/".$task->brief_id."/edit");
    }

}
