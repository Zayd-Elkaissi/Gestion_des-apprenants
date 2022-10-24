<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search with name </title>
</head>
<body>
    <input type="text" name="search" id="search">

    <script type="text/javascript">
        $(document).ready(function () {
          $('#search').keyup(function () {
            var input = $(this).val();
            alert(input);
  
            if (input != ' ') {
              $.ajax({
                url: "access/search.php",
                method: "POST",
                data: { key: input },
                success: function (data) {
                  $('#showS').html(data);
                }
              });
  
            }
  
          });
        });
      </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>