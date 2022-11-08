@extends('layout')
@section('task.form')
hello
    <form action="{{route('task.store')}}" method="POST">

        @csrf
        <input type="text" name="taskName">
        <input type="date" name="starDate">
        <input type="date" name="endDate">
        <input  type="hidden" value="{{$id}}" name="idBrief">
        <input type="submit">
    </form>
@endsection