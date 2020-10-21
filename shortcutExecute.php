<?php
session_start();
if($_SESSION["login"] == true){
    $username = $_SESSION["username"];
    $action = isset($_POST["action"]) ? $_POST["action"] : "N/A";
    $arg01 = isset($_POST["arg01"]) ? $_POST["arg01"] : "N/A";
    $serverSelected = isset($_SESSION["server"]) ? $_SESSION["server"] : "N/A";

    if($action != "N/A" && $username != "N/A" && $serverSelected != "N/A"){
            require_once("data/cred.php");
            require_once("data/server.php");
            if(in_array("*", $login_cred[$username]["access"]) || in_array("ban", $login_cred[$username]["access"])){
                include_once("libs/rcon.php");
                $r = new rcon($server[$serverSelected]["host"],$server[$serverSelected]["port"],$server[$serverSelected]["password"]); //create rcon object for server on the rcon port with a specific password
                if($r->Auth()){ //Connect and attempt to authenticate
                    if($arg01 != "N/A"){
                        $r->rconCommand($action . $arg01); //send a command
                    }else{
                        $r->rconCommand($action); //send a command
                    }
                }

            }else{
                echo("Access denied");
            }
    }else{
        echo("Access denied ");
    }
    
    
}else{
    echo("Access denied");
}

?>