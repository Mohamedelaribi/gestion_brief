@extends('layout')
@section('promotions.edit')



<div class="promotionForm">
    <form action="{{route('promotion.update',$promotion->id)}}" method="POST">

    @csrf
    @method('PUT')
    <div class="row">
        <div class="col">
          <input type="text" value="{{ $promotion->namePromotion}}" name="newnamePromotion" class="form-control" placeholder="Nom Promotion" >
        </div>
        <div class="col">
          <input type="text" value="{{ $promotion->descriptionPromotion }}" name="newdescriptionPromotion" class="form-control" placeholder="Description">
        </div>
        <div class="col">
            <button type="submit" class="btn btn-outline-dark">Envoyer</button>
        </div>
      </div>
</form>
{{-- <a href="{{route('promotion.apprenant.create',$promotion->id)}}"><button class="btn btn-secondary">ajouter un apprenant</button></a> --}}
<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    ajouterun apprenant
  </button>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('promotion.apprenant.store',$promotion->id)}}" method="POST">

                @csrf
                <div class="formApprenant">
                    <div class="col mt-4">
                      <input type="text" name="firstName" class="form-control" placeholder="Nom apprenant" >
                    </div>
                    <div class="col mt-4">
                      <input type="text"  name="lastName" class="form-control" placeholder="Prenom">
                    </div>
                    <div class="col mt-4 mb-4">
                      <input type="text"  name="emailApprenant" class="form-control" placeholder="Email">
                    </div>
                    <div class="col">
                      <input type="hidden"  name="idpromotion" value="{{ $promotion->id }}" class="form-control" placeholder="Email">
                    </div>
                    <div class="col">

                    </div class="col mt-4">
                    <button type="submit" class="btn btn-outline-dark">Envoyer</button>
                  </div>
            </form>
        </div>

      </div>
    </div>
  </div>
</div>



<div class="tableApprenant">
    <table class="table">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>email</th>
            <th class="actionTh">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($apprenants as $apprenant)
          <tr>
            <td>{{ $apprenant->firstName }}</td>
            <td>{{ $apprenant->lastName }}</td>
            <td>{{ $apprenant->email }}</td>
            <td class="actionTd"><a href="{{ route('apprenant.edit',$apprenant->id,$promotion->id) }}"><button type="button" class="btn btn-dark">edit</button></a>
              <form action="{{ route('apprenant.destroy',$apprenant->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-secondary">delete</button>
              </form>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>

@endsection
