@extends('layout')
@section('task.form')
    <form action="{{route('brief.task.store',$id)}}" method="POST">

        @csrf
        <input type="text" name="taskName">
        <input type="date" name="startDate">
        <input type="date" name="endDate">
        <input type="hidden" value="{{$id}}" name="idBrief">
        <input type="submit">
    </form>
@endsection