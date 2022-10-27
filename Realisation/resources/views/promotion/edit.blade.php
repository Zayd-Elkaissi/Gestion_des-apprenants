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
     <input type="text" name="nameUpdate" value=
     {{ $promotion->name }}
     >

     <button type="submit">Update</button>

     <br>
     <a href="/apprenant/create{{'/'.$promotion->id}}">Add Apprenant</a>
     <input type="text" name="search" id="search">
    <div id="show"></div>
     <ul>
        @foreach ($apprenants as $item)
        <li class="text-gray-900">
            {{$item->first_name}} 
            {{$item->last_name}} 
            {{$item->email}} 

        </li>
        <a href="/apprenant/edit/{{$item->id}}">Edit</a>
        <a href="{{ route('apprenant.destroy' , $item->id ) }}">Delete</a>
        @endforeach
     </ul>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script type="text/javascript">
        $(document).ready(function () {
          $('#search').keyup(function () {
            var input = $(this).val();
            // alert(input);
            if (input != ' ') {
              $.ajax({
                type:'get',
                url: '{{ route("apprenant.search")}}',
                // method: "POST",
                data: { key: input },
                success: function (data) {
                  $('#show').html(data);
                }
              });
  
            }

        });
        });
      </script>
</body>
</html>