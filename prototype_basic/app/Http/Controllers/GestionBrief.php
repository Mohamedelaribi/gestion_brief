<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brief;

class GestionBrief extends Controller
{

    public function index()
    {
        $briefs = Brief::all();
        return view('briefs.index',compact('briefs'));
    }


    public function create()
    {
        return view('briefs.form');
    }


    public function store(Request $request)
    {
        $brief = new Brief();
        $brief->nameBrief = $request->input('nameBrief');
        $brief->detailBrief = $request->input('detailBrief');
        $brief->starDate = $request->input('starDate');
        $brief->endDate = $request->input('endDate');
        $brief->save();

        return redirect()->route('brief.index');

    }


    public function show($id)
    {
        $tasks = Brief::all();
        return view('briefs.editForm',compact('tasks'));
    }


    public function edit($id)
    {
        $brief = Brief::find($id);
        $brief = Brief::all();
        return view('briefs.editForm',compact('brief'));
    }


    public function update(Request $request, $id)
    {
        $updateBrief = Brief::find($id);
        $updateBrief->nameBrief = $request->input('newnameBrief');
        $updateBrief->detailBrief = $request->input('newdetailBrief');
        $updateBrief->starDate = $request->input('newstartDate');
        $updateBrief->endDate = $request->input('newendDate');
        $updateBrief->save();
        return redirect()->route('brief.index');
    }


    public function destroy($id)
    {
        
    }
}
