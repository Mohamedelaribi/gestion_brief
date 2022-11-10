
@extends('layout')
@section('apprenants.form')


<form action="{{route('promotion.apprenant.store',$id)}}" method="POST">

    @csrf
    <div class="row g-3 align-items-center">
                <div class="col-auto">
        <input type="text" class="form-control" aria-describedby="name brief" name="nameBrief">
      </div>

        <div class="col-auto">
            <input type="text" class="form-control" aria-describedby="detail brief" name="detailBrief">
        </div>
        <div class="col-auto">
            <input type="text" class="form-control"  name="emailApprenant">
        </div>
        <div class="col-auto">
            {{-- <input type="date" class="form-control"  name="endDate"> --}}
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

@endsection