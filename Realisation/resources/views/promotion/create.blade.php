<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/store" method="post">
        @csrf
     <input type="text" name="name" value="{{ old('name')}}">
     @error('name')
     <div class="py-4 text-gray-900">
          {{$message}}
     </div>
         
     @enderror
     <button type="submit">Ajoter</button>
    </form>
</body>
</html>