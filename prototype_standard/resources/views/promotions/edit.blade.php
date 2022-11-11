@extends('layout')
@section('promotions.edit')
<form action="{{route('promotion.update',$promotion->id)}}" method="POST">

    @csrf
    @method('PUT')
    <input type="text" value="{{ $promotion->namePromotion}}" name="newnamePromotion">
    <input type="text" value="{{ $promotion->descriptionPromotion }}" name="newdescriptionPromotion">
    <input type="hidden" value="{{$promotion->id}}" name="idpromotion">
    <input type="submit">

</form>
<a href="{{route('promotion.apprenant.create',$promotion->id)}}"><button class="addApprenantButton">ajouter un apprenant</button></a>


<table class="table">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>email</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($apprenants as $apprenant)            
      <tr>
        <td>{{ $apprenant->firstName }}</td>  
        <td>{{ $apprenant->lastName }}</td>
        <td>{{ $apprenant->email }}</td>
        <td><a href="{{ route('apprenant.edit',$apprenant->id) }}"><button type="button" class="btn btn-outline-success">edit</button></a>
          <form action="{{ route('apprenant.destroy',$apprenant->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-secondary">delete</button>
          </form>              
        </tr>
      @endforeach
      

    </tbody>
  </table>
@endsection