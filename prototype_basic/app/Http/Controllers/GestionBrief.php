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
