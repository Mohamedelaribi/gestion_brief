<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprenant;
use App\Models\Promotion;


class GestionApprenants extends Controller
{

    public function index()
    {
     $apprenants = Apprenant::select(
        'apprenants.firstName',
        'apprenants.lastName',
        'apprenants.email',
        'apprenants.id as idApprenant',
        'promotions.namePromotion',
        'promotions.Description',
        'promotions.id as idPromotion')
        ->rightJoin('promotions','promotions.id','=','apprenants.idPromotion')->get();
        return view('apprenants.index',compact('apprenants'));
     
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
        $apprenant->idPromotion = $request->input('idPromotion');
        $apprenant->save();
        return redirect('/promotion'."/".$apprenant->idPromotion."/edit");
    }


    public function show($id)
    {
        
    }


    public function edit($id)
    {
        $apprenant = Apprenant::find($id);
        
        return view('apprenants.editFormApprenant',compact('apprenant'));
    }


    public function update(Request $request, $id)
    {
        $updateApprenant = Apprenant::find($id);

        $updateApprenant->firstName = $request->input('newFirstName');
        $updateApprenant->lastName = $request->input('newLastName');
        $updateApprenant->email = $request->input('newEmail');
        $updateApprenant->save();
        return redirect('promotion'."/".$updateApprenant->idPromotion."/edit");

    }


    public function destroy($id)
    {
        $apprenant = Apprenant::find($id);
        $apprenant::destroy($id);
        // $idPromotion = $request->input('idPromotion');
        return redirect('promotion'."/".$apprenant->idPromotion."/edit");
        
    }
}