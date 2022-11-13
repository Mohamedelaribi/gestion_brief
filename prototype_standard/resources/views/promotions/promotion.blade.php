@extends('layout')
@section('promotions.promotion')
<div class="promotionList">
    <div class="titlPromotionList">
      <h2 class="promotionListTitle">Promotions</h2>

      <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        ajouterun promotion
      </button>



      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('promotion.store')}}" method="POST">

                    @csrf
                    <div class="formApprenant">
                        <div class="col mt-4">
                          <input type="text" name="namePromotion" class="form-control" placeholder="Nom Promotion" >
                        </div>

                        <div class="col mt-4 mb-4">
                          <input type="text"  name="descriptionPromotion" class="form-control" placeholder="description">
                        </div>
                        <button type="submit" class="btn btn-outline-dark">Envoyer</button>
                      </div>
                </form>
            </div>
        
          </div>
        </div>
      </div>

    </div>

    <div class="container">
        @foreach ($promotions as $promotion)

      <div class="card m-2 promotionCard" style="width:21rem; height:12rem;">
          <div class="card-body">
            <h5 class="card-title m-2">{{$promotion->namePromotion}}</h5>
            <p class="card-text m-3">{{ $promotion->descriptionPromotion }}</p>
            <div class="action">
                <a href="{{route('promotion.edit',$promotion->id)}}"><button type="button" class="btn btn-dark">edit</button></a>
                <a href="{{route('promotion.edit',$promotion->id)}}"><button type="button" class="btn btn-outline-dark">ajouter apprenant</button></a>
                <form action="{{route ('promotion.destroy',$promotion->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-secondary">delete</button>
                </form>
            </div>

          </div>
        </div>
      @endforeach
  </div>

</div>
@endsection
