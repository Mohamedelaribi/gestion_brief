@extends('layout')
@section('briefs.form')
    <form action="{{route('brief.store')}}" method="POST">

        @csrf
        <div class="row g-3 align-items-center">
                    <div class="col-auto">
            <input type="text" id="inputPassword6" class="form-control" aria-describedby="name brief" name="nameBrief">
          </div>

            <div class="col-auto">
                <input type="text" id="inputPassword6" class="form-control" aria-describedby="detail brief" name="detailBrief">
            </div>
            <div class="col-auto">
                <input type="date" id="inputPassword6" class="form-control"  name="starDate">
            </div>
            <div class="col-auto">
                <input type="date" id="inputPassword6" class="form-control"  name="endDate">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>


@endsection