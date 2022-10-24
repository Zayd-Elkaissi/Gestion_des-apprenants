<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <a href="/create">add</a>
     <ul>
        @foreach ($Promotion as $item)
        <li class="text-gray-900">
            {{$item->name}} 
            <a href=" {{ route ('promotion.edit' , [ $item['id']] ) }}">update</a>
            <form action="{{ route ('promotion.destroy' , [ $item['id']] ) }}" method="post">
           @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>

        </li>
        @endforeach
     </ul>

    
</body>
</html>