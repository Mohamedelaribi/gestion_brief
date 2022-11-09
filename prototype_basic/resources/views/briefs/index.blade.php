@extends('layout')

@section('briefs.index')

<a href="{{ route('brief.create') }}" class="ml-4"><button type="button" class="btn btn-outline-success ">Ajouter un Brief</button></a>
    @foreach ($briefs as $brief)

    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$brief->nameBrief}}</h5>
          <p class="card-text">{{ $brief->detailBrief }}</p>
          <a href="{{route('brief.edit',$brief->id)}}">Edit Brief</a>
        </div>
      </div>
    @endforeach
@endsection