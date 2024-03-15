<!DOCTYPE html>
<head>
    <title>Dashboard2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Dashboard2</h1>
      @php
          
            $record=Session::get('uid');
            echo $record->name."<br>";
            echo "<a href='dashboard1'>dashboard1</a>";

            echo "<a href='logout'>Logout</a>";
          
      @endphp
</body>
</html>