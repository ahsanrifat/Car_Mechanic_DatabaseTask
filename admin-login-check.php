<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    $password=($_POST['password']); 
    echo $password;
    $match_password='admin';

    if($password==$match_password){
        header("Location: admin-panel.php");
    }else{
        $_SESSION["error"]="Wrong Password! Try Again.";
        header("Location: admin-login.php");    
    }   
}

?>