<?php
session_start(); if($_SESSION["login"] == true){

    require('data/cred.php');
    require('data/server.php');

    $toSelect = isset($_GET["server"]) ? $_GET["server"] : "N/A";
    $function = isset($_GET["func"]) ? $_GET["func"] : "N/A";
    if($toSelect != "N/A" && $function != "N/A"){

        if(in_array("*",$login_cred[$_SESSION["username"]]["access"]) || inArray($toSelect,$login_cred[$_SESSION["username"]]["access"])){
            
            $_SESSION["server"] = $toSelect;
            header("Location: interface.php?func=".$function);
        }else{
            echo("Access denied");
        }

    }else{
        echo("Access denied");
    }

}else{
    echo("Access denied");
}
?>