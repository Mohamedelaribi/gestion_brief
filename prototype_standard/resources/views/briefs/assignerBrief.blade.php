@extends('layout')

@section('briefs.assignerBrief')
<div class="container">
    @foreach ($apprenants as $apprenant)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $apprenant->firstName }}</h5>
                <form action="{{ route('brief.assignbrief.store',$apprenant->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="idBrief" value="{{ $idBrief }}">
                    <input type="hidden" name="idApprenant" value="{{ $apprenant->id }}">
                    <button type="submit" class="btn btn-outline-success">assigner</button>
                </form>
                {{-- <form action="{{ route('assignbrief.destroy',$apprenant->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="text" name="idBrief" value="{{ $idBrief }}">
                    <input type="text" name="idApprenant" value="{{ $apprenant->id }}">
                    <button type="submit" class="btn btn-outline-success">deteche</button>
                </form> --}}
                
                {{-- <a href="{{ route('brief.assignbrief.store',$idBrief,$apprenant->id) }}" class="card-link"><button type="button" class="btn btn-outline-success">assigner</button></a> --}}
            </div>
        </div>
    @endforeach
</div>

@endsection