<?php
session_start(); if($_SESSION["login"] == true){
    require('data/server.php');
    require('data/cred.php');
    if(in_array("*", $login_cred[$_SESSION["username"]]["access"]) || in_array($_SESSION["server"].".rcon", $login_cred[$_SESSION["username"]]["access"])){

        require_once('rconclient/index.php');

    }else{
    echo("Access denied");
}
    ?>



<?php }else{
    echo("Access denied");
} ?>