<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
  <div id="data">
    <input type="text" id="Search">
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
  </div>
      <script type="text/javascript" src="{{ URL::asset('js/search.js') }}"></script>
</body>
</html>