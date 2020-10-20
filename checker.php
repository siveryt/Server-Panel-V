<?php
$username = isset($_POST['username']) ? $_POST['username'] : "N/A";
$password = isset($_POST['password']) ? $_POST['password'] : "N/A";
require("data/cred.php");


if($username != "N/A" && $password != "N/A"){
    if($login_cred[$username] == true && $login_cred[$username]["password"] === $password){
        session_start();
        $_SESSION["login"] = true;
        $_SESSION["username"] = $username;
                
        // echo($password . $username);
        // echo($login_cred[$username]["password"]);
        // echo($_SESSION["login"]);
        header('Location: interface.php');

    }else{
        //Password or username wrong
    }
}else{
    echo("No Username or Passsword provided");
}

?>