<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brief;
use App\Models\Apprenant;
use App\Models\Apprenant_brief;


class AssingerBrief extends Controller
{

    public function index($id)
    {
        $apprenants = Apprenant::all();
        $idBrief = $id;
        return view('briefs.assignerBrief',compact('apprenants','idBrief'));
    }

    public function store(Request $request)
    {   
            $assignerbrief_id = $request->input('idBrief');
            $assignerapprenant_id = $request->input('idApprenant');
            $apprennants = Apprenant::where('id',$assignerapprenant_id)->first();
            $apprennants->brief()->attach($assignerbrief_id);
            return redirect()->route('promotion.index');
    }

    public function destroy(Request $request)
    {   
            $assignerbrief_id = $request->input('idBrief');
            $assignerapprenant_id = $request->input('idApprenant');
            $apprennants = Apprenant::where('id',$assignerapprenant_id)->first();
            $apprennants->brief()->detach($assignerbrief_id);
            return redirect()->route('promotion.index');
    }


    public function show($id)
    {

    }




    // public function destroy($id)
    // {
    //     $desassigner = Apprenants::where('id',$id_apprenant)->first();
    //     $desassigner->brief()->detach($id);
    //     return redirect('/assigner/'. $id);
    // }
}
