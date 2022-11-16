
@extends('layout')
@section('apprenants.form')


<form action="{{route('promotion.apprenant.store',$id)}}" method="POST">

    @csrf
    <div class="row g-3 align-items-center">
                <div class="col-auto">
        <input type="text" class="form-control"    name="firstName">
      </div>

        <div class="col-auto">
            <input type="text" class="form-control"  name="lastName">
        </div>
        <div class="col-auto">
            <input type="text" class="form-control"  name="emailApprenant">
        </div>
        <div class="col-auto">
            <input type="hidden" class="form-control" value="{{ $id }}"  name="idpromotion">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

@endsection