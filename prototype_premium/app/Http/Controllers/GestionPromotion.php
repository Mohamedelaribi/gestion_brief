<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GestionPromotionModel;

class GestionPromotion extends Controller
{
    public function index()
    {
        $data =  GestionPromotionModel ::all();
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
        $updatePromotion = new GestionPromotionModel();
        $updatePromotion->namePromotion = $request->input('testName');
        $updatePromotion->save();
        return redirect()->route('test.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        
            $promotion = GestionPromotionModel::find($id);
            return view('editForm',compact('promotion'));
        
    }

    public function update(Request $request, $id)
    {   
        $updatePromotion = GestionPromotionModel::find($id);
        $updatePromotion->namePromotion = $request->input('newNamePromotion');
        $updatePromotion->save();
        return redirect()->route('test.index');
    }

    public function search($name=null){ 
        if($name == null){
            $data =GestionPromotionModel::all();
            return view('search',compact('data'));        }
        else {
            $data =GestionPromotionModel::where('namePromotion', 'like','%'.$name.'%')->get();
            return view('search',compact('data'));

        }

    }

    public function destroy($id)
    {
        //
    }
}
