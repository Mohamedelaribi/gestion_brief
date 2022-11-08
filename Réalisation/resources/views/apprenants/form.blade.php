
@extends('leyout')
@section('formApprenant')
       <div class="formApprenant">
            <div class="apprenantTitleDiv">
                <h3 class="apprenantTitle">Ajouter Un Apprenant</h3>
            </div>
        <form action="{{route('apprenant.store')}}" method="post">
            @csrf
            <div id="formInput">
                <label for="firstName">Nom:</label>
                <input class="addPromotionInput" type="text" id="firsName" name="firstName" placeholder="entre Nom">
            </div>
            <div id="formInput">
                <label for="lastName">Prénom:</label>
                <input class="addPromotionInput" type="text" name="lastName" id="lastName" placeholder="entre Prénom">
            </div> 
            <div id="formInput">
                <label for="email">email:</label>
                <input class="addPromotionInput" type="email" name="email" id="email" placeholder="entre Email">
            </div>

            <input  type="hidden" value="{{$id}}" name="idPromotion">
            <div class="inputButton">
                <input type="submit" value="Envoyer" class="btn btn-light">
            </div>
            
        </form>
    </div>
@endsection
 
