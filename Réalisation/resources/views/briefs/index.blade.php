@extends('layout')

@section('briefs.index')



<div class="briefList">
    <div class="titleBrief">
        <h2>Briefs</h2>
    </div>
    <a href="{{ route('brief.create') }}" class="ml-4"><button type="button" class="btn btn-secondary btn-lg">ajouter brief</button></a>

</div>
<div class="container">
      @foreach ($briefs as $brief)

    <div class="card m-2" style="width:27rem; height:15rem;">
        <div class="card-body">
          <h5 class="card-title m-2">{{$brief->nameBrief}}</h5>
          <p class="card-text m-3">{{ $brief->detailBrief }}</p>
          <div class="action">
              <a href="{{route('brief.edit',$brief->id)}}"><button type="button" class="btn btn-dark">edit</button></a>
              <form action="{{route ('brief.destroy',$brief->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-secondary">delete</button>
              </form>
              <a href="{{route('brief.task.create',$brief->id)}}"><button type="button" class="btn btn-outline-dark">ajouter tache</button></a>
              <a href="{{route('brief.assignbrief.index',$brief->id)}}"><button type="button" class="btn btn-outline-dark">assigner </button></a>
          </div>

        </div>
      </div>
    @endforeach
</div>

@endsection
