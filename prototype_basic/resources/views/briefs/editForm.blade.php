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
    

        @foreach ($brief as $task)
    <h1>{{$task->nameBrief}}</h1>
    @foreach ($task->task as $item)
        
    @endforeach
    <h1>{{$item->taskName}}</h1>
@endforeach
@endsection