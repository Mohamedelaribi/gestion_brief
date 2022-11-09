@extends('layout')
@section('briefs.editForm')

        <form action="{{route('brief.update',$brief->id)}}" method="POST">

            @csrf
            @method('PUT')
            <input type="text" value="{{ $brief->nameBrief }}" name="newnameBrief">
            <input type="text" value="{{ $brief->detailBrief }}" name="newdetailBrief">
            <input type="date" value="{{ $brief->starDate }}" name="newstartDate">
            <input type="date" value="{{ $brief->endDate }}" name="newendDate">
            <input type="hidden" value="{{$brief->id}}" name="idBrief">
            <input type="submit">
        </form>
    
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
                <td><a href="{{route('editTask',$task->id)}}"><button type="button" class="btn btn-outline-success">edit tache</button></a>
                <a href="{{route('createTask',$brief->id)}}"><button type="button" class="btn btn-outline-success">ajouter tache</button></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
@endsection