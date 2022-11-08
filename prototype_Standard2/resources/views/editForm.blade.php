<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('test.update',$promotion->id)}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" value="{{$promotion->namePromotion}}" name="newNamePromotion">
        <input type="submit" name="updatePromotion">
    </form>
    
</body>
</html>