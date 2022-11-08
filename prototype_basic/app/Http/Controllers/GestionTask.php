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
        $brief = new Task();
        $brief->taskName = $request->input('taskName');
        $brief->starTask = $request->input('starTask');
        $brief->endDate = $request->input('endDate');
        $brief->save();

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
