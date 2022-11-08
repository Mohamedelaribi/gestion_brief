@extends('layout')

@section('briefs.index')
    @foreach ($briefs as $brief)
        <h1>{{$brief->nameBrief}}</h1>
        <a href="{{route('task_create',$brief->id)}}">ajouter task</a>
    @endforeach
@endsection