@extends('layout')
@section('promotions.promotion')
<div class="promotionList">
    <div class="titlPromotionList">
      <h2 class="promotionListTitle">Promotions</h2>
      <a href="{{ route('promotion.create') }}" class="ml-4"><button type="button" class="btn btn-secondary btn-lg">ajouter promotion</button></a>

    </div>

    <div class="container">
        @foreach ($promotions as $promotion)
  
      <div class="card m-2" style="width:21rem; height:12rem;">
          <div class="card-body">
            <h5 class="card-title m-2">{{$promotion->namePromotion}}</h5>
            <p class="card-text m-3">{{ $promotion->descriptionPromotion }}</p>
            <div class="action">
                <a href="{{route('promotion.edit',$promotion->id)}}"><button type="button" class="btn btn-dark">edit</button></a>
                <form action="{{route ('promotion.destroy',$promotion->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-secondary">delete</button>
                </form>
                {{-- <a href="{{route('promotion.brief.create',$promotion->id)}}"><button type="button" class="btn btn-outline-dark">ajouter tache</button></a> --}}
            </div>
  
          </div>
        </div>
      @endforeach
  </div>

</div>
@endsection