@extends('layout')

@section('briefs.index')

<a href="{{ route('brief.create') }}" class="ml-4"><button type="button" class="btn btn-secondary btn-lg">ajouter brief</button></a>
<div class="container">
      @foreach ($briefs as $brief)

    <div class="card m-2" style="width:21rem; height:12rem;">
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
          </div>

        </div>
      </div>
    @endforeach
</div>


            {{-- @foreach ($tasks as $task)
    <h1>{{$task->nameBrief}}</h1> --}}
    {{-- @foreach ($task->task as $item)
        
    @endforeach
    <h1>{{$item->taskName}}</h1> --}}
{{-- @endforeach --}}
@endsection