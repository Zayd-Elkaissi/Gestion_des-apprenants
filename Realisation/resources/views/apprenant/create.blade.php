<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="
    {{-- /apprenant/store .$promotion->id  --}}
    
    {{ route('apprenant.store'.$id->id )}}
    " method="post">
        @csrf
     <input type="text" name="first_name" value="{{ old('first_name')}}">
     @error('first_name')
     <div class="py-4 text-gray-900">
        {{$message}}
   </div>
   @enderror
     <input type="text" name="last_name" value="{{ old('last_name')}}">
     @error('last_name')
     <div class="py-4 text-gray-900">
        {{$message}}
   </div>
   @enderror
     <input type="text" name="email" value="{{ old('email')}}">
     @error('email')
     <div class="py-4 text-gray-900">
          {{$message}}
     </div>
         
     @enderror
     <button type="submit">Ajoter</button>
    </form>
</body>
</html>