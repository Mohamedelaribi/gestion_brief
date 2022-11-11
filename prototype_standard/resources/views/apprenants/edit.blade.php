@extends('layout')

@section('apprenants.edit')
<form action="{{route('apprenant.update',$id)}}" method="POST">

    @csrf
    @method('PUT')
    <div class="row g-3 align-items-center">
                <div class="col-auto">
        <input type="text" class="form-control"    name="newnameApprenant">
      </div>

        <div class="col-auto">
            <input type="text" class="form-control"  name="newlastApprenant">
        </div>
        <div class="col-auto">
            <input type="text" class="form-control"  name="newEmail">
        </div>
        <div class="col-auto">
            <input type="hidden" class="form-control" value="{{ $id }}"  name="idpromotion">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
@endsection