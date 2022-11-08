    <div class="formApprenant">
        <form action="{{route('apprenant_update',$apprenant->id_Promotion)}}" method="POST">
            @csrf
            <label for="firstName">Nom:</label>
            <input type="text" id="firsName" name="newFirstName" value="{{$apprenant->firstName}}">
            <label for="lastName">Prénom</label>
            <input type="text" name="lastName" id="newLastName" value="{{$apprenant->lastName}}">
            <label for="email">email</label>
            <input type="email" name="email" id="newEmail" value="{{$apprenant->email}}">
            <input type="hidden" value="{{$apprenant}}" name="idPromotion">
            <input type="submit" value="add">
        </form>
    </div>
