<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection</title>
</head>
<body>
    <?php

       $severname = "localhost";
       $username = "root";
       $password = "";
       $database = "agrofarm";
    
       $conn = mysqli_connect($severname, $username, $password, $database);
    
       if(!$conn){
        die("Sorry we failed to connect: ".mysqli_connect_error());    
                 }
    ?>
</body>
</html>