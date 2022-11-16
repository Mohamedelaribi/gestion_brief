@extends('layout')
@section('briefs.form')



<h2 class="addBriefTitle">Ajouter brief</h2>
<div class="formBriefContainer">

    <div class="formBrief">
        <form action="{{route('brief.store')}}" method="POST">

            @csrf
            <div class="row g-3 align-items-center">
                        <div class="col-auto">
                <input type="text" id="inputPassword6" class="form-control" aria-describedby="name brief" name="nameBrief" placeholder="Nom Brief">
              </div>

                <div class="col-auto">
                    <input type="text" id="inputPassword6" class="form-control" aria-describedby="detail brief" name="detailBrief" placeholder="Detail Brief">
                </div>
                <div class="col-auto">
                    <input type="date" id="inputPassword6" class="form-control"  name="starDate">
                </div>
                <div class="col-auto">
                    <input type="date" id="inputPassword6" class="form-control"  name="endDate">
                </div>
            </div>
            <button type="submit" class="btn btn-dark mt-4">Ajouter</button>
        </form>
    </div>
</div>






@endsection
