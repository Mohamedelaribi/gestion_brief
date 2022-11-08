



@extends('leyout')
@section('form')
<div class="addPromotionForm">
    <div class="title">
        <h2 class="ajouterPromotion">Ajouter Un Promotion</h2>
    </div>
    <form action="{{route('promotion.store')}}" method="POST">
        @csrf
        <input type="text" name="namePromotion" class="addPromotionInput" placeholder="Ajouter Un Promotion">
        <input type="text" name="descriptionPromotion" class="addPromotionInput" placeholder="Ajouter Un Description">
        <input type="submit" class="btn btn-light">
    </form>
</div>

@endsection