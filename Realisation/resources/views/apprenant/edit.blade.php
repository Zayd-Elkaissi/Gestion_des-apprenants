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
    <form action="{{ route('apprenant.update',[$Apprenant->id])}}" method="post">
        @csrf
        @method('PUT')
     <input type="text" name="first_name" value=
     {{ $Apprenant->first_name }}
     >

     <input type="text" name="last_name" value=
     {{ $Apprenant->last_name }}
     >

     <input type="text" name="email" value=
     {{ $Apprenant->email }}
     >

     <button type="submit">Update</button>
    </form>
</body>
</html>