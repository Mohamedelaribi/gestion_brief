<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprenant;
use App\Models\Apprenant_brief;

class GestionApprenant extends Controller
{
 
    public function index()
    {
        
    }

 
    public function create($id)
    {
        return view('apprenants.form',compact('id'));
    }


    public function store(Request $request)
    {
        $apprenant = new Apprenant();
        $apprenant->firstName = $request->input('firstName');
        $apprenant->lastName = $request->input('lastName');
        $apprenant->email = $request->input('emailApprenant');
        $apprenant->promotion_id = $request->input('idpromotion');
        $apprenant->save();
        return redirect()->route('promotion.index');
    }


    public function show($id)
    {
        
    }


    public function edit($id)
    {
        $apprenant = Apprenant::find($id);
        return view('apprenants.edit',compact('id'));
    }


    public function update(Request $request, $id)
    {
        $updateApprenant = Apprenant::find($id);
        $updateApprenant->firstName = $request->input('newnameApprenant');
        $updateApprenant->lastName = $request->input('newlastApprenant');
        $updateApprenant->email = $request->input('newEmail');
        $updateApprenant->save();
        return redirect()->route('promotion.index');
    }


    public function destroy($id)
    {
        Apprenant::destroy($id);
        return redirect()->route('brief.index');
    }
}
