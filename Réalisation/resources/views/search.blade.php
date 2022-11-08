



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
    <a href="{{route ('promotion.edit',$item->id)}}"><button class="actionButton delete">delete</button></a>
  </div>
  </div>

  @endforeach
</div>


    {{-- <table class="table">
        <thead>
          <tr>
            <th scope="col">name Promotion</th>
            <th scope="col">edit</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
          <tr>
            <td>{{$item['namePromotion']}}</td>
            <td><a href="{{route('promotion.edit',$item->id)}}">edit</a></td>
          </tr>
          @endforeach

        </tbody>
      </table> --}}

