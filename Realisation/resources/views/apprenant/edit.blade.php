<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2> Edit page</h2>
    <form action="{{ route('promotion.update', ['promotion'=> $promotion->id])}}" method="post">
        @csrf
        @method('PUT')
     <input type="text" name="nam" value=
     {{ $promotion->name }}
     >

     <button type="submit">Update</button>

     <ul>
        @foreach ($apprenants as $item)
        <li class="text-gray-900">
            {{$item->first_name}} 

        </li>
        @endforeach
     </ul>
    </form>
</body>
</html>