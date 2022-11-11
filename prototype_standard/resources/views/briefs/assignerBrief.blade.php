@extends('layout')

@section('briefs.assignerBrief')
<div class="container">
    @foreach ($apprenants as $apprenant)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $apprenant->firstName }}</h5>
                <a href="{{ route('brief.assignbrief.store',$apprenant->id) }}" class="card-link"><button type="button" class="btn btn-outline-success">assigner</button></a>
            </div>
        </div>
    @endforeach
</div>

@endsection