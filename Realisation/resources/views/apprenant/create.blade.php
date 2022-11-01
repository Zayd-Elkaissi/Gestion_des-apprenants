<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href={{asset('css/create.css')}}>
</head>
<body>



        {{-- <section class="ftco-section"> --}}
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="">Create Apprenant</h2>
                    </div>
                </div>
                 <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-8">
 




    <form action="{{ route('apprenant.store', ['id' => $id]) }}" class="has-primary" method="post">
        @csrf
     <input type="text" name="first_name" class="form-control my-3" value="{{ old('first_name')}}">
     @error('first_name')
     <span class="my-0 ms-0">
        {{$message}}
   </span>
   @enderror
     <input type="text" name="last_name" class="form-control my-3" value="{{ old('last_name')}}">
     @error('last_name')
     <span class="my-0 ms-0">
        {{$message}}
   </span>
   @enderror
     <input type="text" name="email" class="form-control my-3" value="{{ old('email')}}">
     @error('email')
     <span class="my-0 ms-0">
          {{$message}}
     </span><br>
         
     @enderror
     <button type="submit" class="btn btn-warning">Ajoter</button>
    </form>
</div>
</div>
    
</body>
</html>