@extends('layout')
@section('task.edit')

<form action="{{route('task.update',$task->id)}}" method="POST">

    @csrf
    @method('PUT')
    <input type="text" value="{{ $task->taskName }}" name="newnameTask">
    <input type="date" value="{{ $task->startDate }}" name="newstartDate">
    <input type="date" value="{{ $task->endDate }}" name="newendDate">
    <input type="submit">
</form>
@endsection