@extends('layout')
@section('task.form')
    {{-- <form action="{{route('brief.task.store',$id)}}" method="POST">

        @csrf
        <input type="text" name="taskName">
        <input type="date" name="startDate">
        <input type="date" name="endDate">
        <input type="hidden" value="{{$id}}" name="idBrief">
        <input type="submit">
    </form> --}}

<h2 class="addBriefTitle">Ajouter tache</h2>
<div class="formBriefContainer">

    <div class="formBrief">
        <form action="{{route('brief.task.store',$id)}}" method="POST">

            @csrf
            <div class="row g-3 align-items-center">
                        <div class="col-auto">
                <input type="text" id="inputPassword6" class="form-control" aria-describedby="name brief" name="taskName" placeholder="Nom Tache">
              </div>
                <div class="col-auto">
                    <input type="date" id="inputPassword6" class="form-control"  name="startDate">
                </div>
                <div class="col-auto">
                    <input type="date" id="inputPassword6" class="form-control"  name="endDate">
                    <input type="hidden" value="{{$id}}" name="idBrief">
                </div>
            </div>
            <button type="submit" class="btn btn-dark mt-4">Ajouter</button>
        </form>
    </div>
</div>

@endsection
