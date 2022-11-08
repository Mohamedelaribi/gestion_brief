@extends('leyout')
@section('editForm')


    <div class="editContainer">
      <div id="editDiv">
        <h1 >{{$promotion->namePromotion}}</h1>
        <button class="editButton" id="button">Edit</button>
      </div>
      <div class="editFormContainer" id="editForm">
        <form action="{{route('promotion.update',$promotion->id)}}" method="post">
          @csrf
          @method('PUT')
              <input type="text" value="{{$promotion->namePromotion}}" name="newNamePromotion" class="addPromotionInput newName">
              <input class="editButton" type="submit" value="edit" name="updatePromotion">
  </form>
  
      </div>
      <a href="{{ route('apprenant_create',$promotion->id)}}"><button class="addApprenantButton">ajouter un apprenant</button></a>

    </div>


    
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Email</th>
                <th scope="col">edit apprenant</th>
              </tr>
            </thead>
            <tbody>
                @if ($apprenants[0]->idApprenant !=null)
                    @foreach ($apprenants as $apprenant)
                        <tr>
                            <td>{{$apprenant['firstName']}}</td>
                            <td>{{$apprenant['lastName']}}</td>
                            <td>{{$apprenant['email']}}</td>
                            <td><a href="{{route('apprenant.edit',$apprenant->idApprenant)}}"><button class="actionButton edit">Edite</button></a></td>
                            <td>
                              <form action="{{route('apprenant.destroy',$apprenant->idApprenant)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="actionButton delete">Delete</button>
                              </form>
                              </td>

                            <td>
                        </tr>
                @endforeach 
                @endif

      
            </tbody>
          </table>
      </div>
    </div>

  <script type="text/javascript" src="{{ URL::asset('js/promotion.js') }}"></script>

@endsection

    
