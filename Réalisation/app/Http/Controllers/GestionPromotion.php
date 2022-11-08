<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;
use App\Models\Apprenant;


class GestionPromotion extends Controller
{
    public function index()
    {
        $data =  Promotion ::all();
        return view('index',[
            'data'=> $data
        ]);
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $Promotion = new Promotion();
        $Promotion->namePromotion = $request->input('namePromotion');
        $Promotion->Description = $request->input('descriptionPromotion');
        $Promotion->save();
        return redirect()->route('promotion.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        
        $promotion = Promotion::find($id);
        $apprenants = Apprenant::
        select(
        'apprenants.firstName',
        'apprenants.lastName',
        'apprenants.email',
        'apprenants.id as idApprenant',
        'promotions.namePromotion',
        'promotions.Description',
        'promotions.id as idPromotion')
        ->rightJoin('promotions','promotions.id','=','apprenants.idPromotion')
        ->where('promotions.id','=',$id)->get();
        return view('editForm',compact('promotion','apprenants'));

        
    }

    public function update(Request $request, $id)
    {   
        $updatePromotion = Promotion::find($id);
        $updatePromotion->namePromotion = $request->input('newNamePromotion');
        $updatePromotion->save();
        return redirect()->route('promotion.index');
    }

    public function search($name=null){ 
        if($name == null){
            $data =Promotion::all();
            return view('search',compact('data'));      
        }
        else {
            $data = Promotion::where('namePromotion', 'like','%'.$name.'%')->get();
            return view('search',compact('data'));

        }

    }

    public function destroy($id)
    {
        Promotion::destroy($id);
        return redirect()->route('promotion.index');
        
        

    }

}
