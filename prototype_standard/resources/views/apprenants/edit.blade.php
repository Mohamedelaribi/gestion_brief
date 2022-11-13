@extends('layout')

@section('apprenants.edit')




<div class="card cardApprenant">
    <div class="card-body">
        <h3>edit apprenant</h3>
        <form action="{{route('apprenant.update',$apprenant->id)}}" method="POST" class="mt-5">

            @csrf
            @method('PUT')
            <div class="row g-3 align-items-center">
                        <div class="col-auto">
                <input type="text" class="form-control" value="{{ $apprenant->firstName }}"    name="newnameApprenant">
              </div>

                <div class="col-auto">
                    <input type="text" class="form-control" value="{{ $apprenant->lastName }}"  name="newlastApprenant">
                </div>
                <div class="col-auto mb-4">
                    <input type="text" class="form-control" value="{{ $apprenant->email }}"  name="newEmail">
                </div>
                <div class="col-auto">
                    <input type="hidden" class="form-control" value="{{ $apprenant->promotion_id }}"  name="idpromotion">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
  </div>

@endsection
