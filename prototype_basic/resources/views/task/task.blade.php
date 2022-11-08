@extends('layout')
@section('task.form')
    <form action="{{route('brief.store')}}" method="POST">

        @csrf
        <input type="text" name="nameBrief">
        <input type="text" name="detailBrief">
        <input type="date" name="starDate">
        <input type="date" name="endDate">
        <input  type="hidden" value="{{$id}}" name="idPromotion">
        <input type="submit">
    </form>
@endsection