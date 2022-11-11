<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;

class GestionPromotion extends Controller
{

    public function index()
    {
        $promotions = Promotion::all();
        return view('promotions.promotion', compact('promotions'));
    }


    public function create()
    {
        return view('promotions.form');
    }


    public function store(Request $request)
    {
        $Promotion = new Promotion();
        $Promotion->namePromotion = $request->input('namePromotion');
        $Promotion->descriptionPromotion = $request->input('descriptionPromotion');
        $Promotion->save();
        return redirect()->route('promotion.index');
    }


    public function show($id)
    {
        
    }


    public function edit($id)
    {
        $promotion = Promotion::where('id',$id)->first();
        $apprenants = $promotion->apprenant;
        return view('promotions.edit', compact('promotion','apprenants'));
    }


    public function update(Request $request, $id)
    {
        $updatePromotion = Promotion::find($id);
        $updatePromotion->namePromotion = $request->input('newnamePromotion');
        $updatePromotion->descriptionPromotion = $request->input('newdescriptionPromotion');
        $updatePromotion->save();
        return redirect()->route('promotion.index');
    }


    public function destroy($id)
    {
        Promotion::destroy($id);
        return redirect()->route('promotion.index');
    }
}
