@extends('layout')
@section('briefs.editForm')



    <div class="editFormBrief">
                <form action="{{route('brief.update',$brief->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <input type="text" value="{{ $brief->nameBrief }}" name="newnameBrief" class="form-control mt-4">
                <input type="text" value="{{ $brief->detailBrief }}" name="newdetailBrief" class="form-control mt-4">
                <input type="date" value="{{ $brief->starDate }}" name="newstartDate" class="form-control mt-4">
                <input type="date" value="{{ $brief->endDate }}" name="newendDate" class="form-control mt-4">
                <input type="hidden" value="{{$brief->id}}" name="idBrief">

            </div>
                <button type="submit" class="btn btn-secondary mt-4">Envoyer</button>
        </form>
        <a href="{{route('brief.task.create',$brief->id)}}"><button type="button" class="btn btn-outline-dark">ajouter tache</button></a></td>
    </div>



        <table class="table">
            <thead>
              <tr>
                <th>tache</th>
                <th>date début</th>
                <th>date fin</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
              <tr>
                <td>{{$task->taskName}}</td>
                <td>{{$task->startDate}}</td>
                <td>{{$task->endDate}}</td>
                <td><a href="{{route('task.edit',$task->id)}}"><button type="button" class="btn btn-outline-secondary">edit tache</button></a>
                  <form action="{{route ('task.destroy',$task->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-secondary">delete</button>
                  </form>
                </tr>
              @endforeach


            </tbody>
          </table>
@endsection
