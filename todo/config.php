<!DOCTYPE html>
<html>
    <?php
    session_start();
    $server="localhost";
    $username="root";
    $password="";
    $database="sab";
    $conn=mysqli_connect($server,$username,$password,$database);
    if(!$conn){
        die(mysqli_connect_error());
    }
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            padding: 5px;
        }
        input{
            color: yellow;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
</html>

