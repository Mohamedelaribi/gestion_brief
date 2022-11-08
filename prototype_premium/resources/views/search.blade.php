

    <table class="table">
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
            <td><a href="{{route('test.edit',$item->id)}}">edit</a></td>
          </tr>
          @endforeach

        </tbody>
      </table>
{{-- @foreach ($data as $row)
    Id : {{ $row->id }} 
    Name : {{ $row->namePromotion }}
    <a href="/delete?id={{ $row->id }}">Delete </a> 
    <a href="/update_promotion/{{ $row->id }}">/ Edit </a> 
    <br>
@endforeach --}}
