<?php 
    include "config.php";
    if($_SESSION['login']){
        echo "Login successful";
    }
    else{
        header("Location: login/");
    }
?>