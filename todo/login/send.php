<?php
    require "../config.php";
    if(isset($_POST['register'])){
        $uname=$_POST['uname'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];  

        $query = "INSERT INTO users(username,email,pass) VALUES('$uname','$email','$pass')";
        $query_run = mysqli_query($conn,$query);
        if($query_run){
            header("Location: index.php");
        }
    }
    mysqli_close($conn);
?>