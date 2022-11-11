<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brief;
use App\Models\Apprenant;


class AssingerBrief extends Controller
{

    public function index($id)
    {
        $apprenants = Apprenant::all();
        return view('briefs.assignerBrief',compact('apprenants'));
    }

    public function store()
    {
        $apprennants = Apprenants::where('id',$id_apprenant)->first();
        $apprennants->brief()->attach($id);
        return redirect('/assigner/'. $id);
    }


    public function show($id)
    {

    }




    public function destroy($id)
    {
        
    }
}
