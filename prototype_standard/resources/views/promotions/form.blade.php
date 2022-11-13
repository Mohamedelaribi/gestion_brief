@extends('layout')
@section('promotions.form')
<form action="{{route('promotion.store')}}" method="POST">

    @csrf
    <div class="row g-3 align-items-center">
        <div class="col-auto">
<input type="text"  class="form-control" placeholder="name promotion" name="namePromotion">
</div>

<div class="col-auto">
    <input type="text"  class="form-control" placeholder="description" name="descriptionPromotion">
</div>
</div>
<button type="submit" class="btn btn-primary">Ajouter</button>  
</form>
@endsection
