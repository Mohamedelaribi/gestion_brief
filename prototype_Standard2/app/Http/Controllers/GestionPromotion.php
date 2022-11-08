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

    public function search_promotion(Request $request){
        $text = $request-input('searchPromotion');
        $searchSql = DB::table('gestion_promotion_models')->where('namePromotion','LIKE',"$text")->get();
        return response()->json($searchSql);
    }

    public function destroy($id)
    {
        //
    }
}
