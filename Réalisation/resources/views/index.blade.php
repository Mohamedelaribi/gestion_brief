@extends('leyout')
@section('index')
  
<div id="data">
  <div class="getionPromotion">
        <a href="{{route('promotion.create')}}"><button class="addPromotion">ajouter promotion</button></a>
        <input type="text" id="Search" placeholder="Search Promotion">
  </div>
  <div class="promotionList">
    <div class="titlPromotionList">
      <h2 class="promotionListTitle">Promotions</h2>
    </div>

    <div class="containerPromotion">
      @foreach ($data as $item)

      <div class="promotionDetail">
        <div class="NamePromotionDiv">
          <h3 class="namePromotion">
            {{$item['namePromotion']}}
          </h1>
        </div>
        <p class="descriptionPromotion">
          {{$item['Description']}}
        </p>
        <div class="action">
        <a href="{{route ('promotion.edit',$item->id)}}"><button class="actionButton edit">edit</button></a>
        <form action="{{route ('promotion.destroy',$item->id)}}" method="post">
          @csrf
          @method('DELETE')
          <a href=""><button class="actionButton delete">delete</button></a>
        </form>
        
      </div>
      </div>

      @endforeach
    </div>
  </div>

</div>

    <script type="text/javascript" src="{{ URL::asset('js/search.js') }}"></script>
    
@endsection