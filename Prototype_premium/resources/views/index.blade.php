<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <input type="text" name="search" id="search">
    <div id="show"></div>
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

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script type="text/javascript">
        $(document).ready(function () {
          $('#search').keyup(function () {
            var input = $(this).val();
            // alert(input);
            if (input != ' ') {
              $.ajax({
                type:'get',
                url: '{{ route("promotion.search")}}',
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