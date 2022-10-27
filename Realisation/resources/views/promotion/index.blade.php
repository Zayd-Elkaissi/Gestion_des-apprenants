<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>







  <body>
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-xs-6">
                            <h2>Manage <b>Promotion</b></h2>
                        </div>
                        <div class="col-xs-6">
                            <a href="/create" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span> Ajouter</span></a>
                            <form action="" class="d-flex col-md-6" id="for" method="POST">
                                <i class="bi bi-search" id="searchi"></i>
                                <input class="form-control" placeholder="Search" type="search" id="search" name="input" >
                              </form>	
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                
                            </th>
                            <th>Nom de promotion</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="show">
                        @foreach ($Promotion as $item)
                        <tr>
                            <td>

                            </td>
                            <td>  {{$item->name}} </td>
                            <td>
                                <a href="{{ route ('promotion.edit' , [ $item->id] ) }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Éditer">&#xE254;</i></a>
                                <a href="delete.php?id=<?php  ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Effacer">&#xE872;</i></a>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>        
    </div>








  
    {{-- <input type="text" name="search" id="search">
    <div id="show"></div> --}}
    {{-- <a href="/create">add</a> --}}
     <ul>
        @foreach ($Promotion as $item)
        <li class="text-gray-900">
            {{$item->name}} 
            <a href=" {{ route ('promotion.edit' , [ $item->id] ) }}">update</a>
            {{-- <a href="{{ route ('promotion.destroy' ,  $item->id ) }}">Delete</a> --}}
            <form action="{{ route ('promotion.destroy' , [ $item->id] ) }}" method="post">
           @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>

        </li>
        @endforeach
     </ul>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
       <script>
        $(document).ready(function(){
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();
           
        });
        </script>
</body>
</html>