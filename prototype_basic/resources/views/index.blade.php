<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hello</h1>
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
            <td><a href="">edit</a></td>
          </tr>
          @endforeach

        </tbody>
      </table>

</body>
</html>