
@extends('leyout')
@section('editApprenant')
 

    <div class="editFormApprenant">

        <div class="apprenantTitleDiv">
            <h3 class="ApprenantTitle">
                Edit Apprenant
            </h3>
        </div>
        <form action="{{route('apprenant.update',$apprenant->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div id="formInput">
                <label for="firstName">Nom:</label>
                <input class="addPromotionInput" type="text" id="firsName" name="newFirstName" value="{{$apprenant->firstName}}">
            </div>
            <div id="formInput">
                <label for="lastName">Prénom</label>
                <input class="addPromotionInput" type="text" name="newLastName" id="newLastName" value="{{$apprenant->lastName}}">
            </div>

            <div id="formInput">
                <label for="email">email</label>
                <input class="addPromotionInput" type="email" name="newEmail" id="newEmail" value="{{$apprenant->email}}">
            </div>

            <input type="hidden" value="{{$apprenant}}" name="idPromotion">
            <input type="submit" value="Envoyer" class="btn btn-light">
        </form>

    </div>

@endsection
