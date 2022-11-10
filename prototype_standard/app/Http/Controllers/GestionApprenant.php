<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprenant;

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
        $apprenant->email = $request->input('email');
        $apprenant->save();
        return redirect()->route('promotion.index');
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
