@extends('layout')

@section('briefs.assignerBrief')
<div class="container">
    @foreach ($apprenants as $apprenant)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $apprenant->firstName }}</h5>
                <form action="{{ route('brief.assignerbrief.store',$apprenant->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="idBrief" value="{{ $idBrief }}">
                    <input type="hidden" name="idApprenant" value="{{ $apprenant->id }}">
                    <button type="submit" class="btn btn-outline-success">assigner</button>
                </form>
                <form action="" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-secondary">delete</button>
                  </form>
            </div>
        </div>
    @endforeach
</div>

@endsection
