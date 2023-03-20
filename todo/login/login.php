<?php 
    require "../config.php";
    $uname=htmlspecialchars($_POST['uname']);

    $pass=htmlspecialchars($_POST['pass']);

    $query = "SELECT * FROM users WHERE username='$uname'";
    $query_run = mysqli_query($conn,$query);
    if(mysqli_num_rows($query_run)>0){
        while ($row = mysqli_fetch_assoc($query_run)) {
            // Access the data as an array
            if($pass==$row['pass']){
                $_SESSION['login']=true;
                header("Location: /todo");
            }
            else{
                $_SESSION['login']=false;
                $_SESSION['message']="Login unsuccessful";
                header("Location: /todo");
            }
          }
    }
    else{
        echo 'The user doesnt exist';
    }

    exit;
?>