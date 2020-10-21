<?php
session_start(); if($_SESSION["login"] == true){
    require_once('libs/query.php');
    require('data/server.php');

    $server = new Query($server[$_SESSION["server"]]["host"] . ":" . $server[$_SESSION["server"]]["port"]);
    //or new Query('some.minecraftserver.com', $port, $timeout);
    if ($server->connect())
    {
    $info = $server->get_info();
    $queryInfo = $info;
    }

?>
<?php
if($queryInfo["game_id"] == ""){?>
    <div class="alert alert-danger" role="alert">
        <?php echo("Server is offline or some error occurred"); ?>
    </div>
<?php }
?>
<h1>Dashboard</h1>

<ul class="list-group list-group-flush">
    <li class="list-group-item">Server IP: <?php echo($queryInfo["hostip"]); ?>:<?php echo($queryInfo["hostport"]); ?>
    </li>
    <li class="list-group-item">
        Players: <?php echo($queryInfo["numplayers"]); ?>/<?php echo($queryInfo["maxplayers"]); ?>
    </li>
    <li class="list-group-item">MOTD: <?php echo($queryInfo["hostname"]); ?></li>
    <li class="list-group-item">Gametype: <?php echo($queryInfo["gametype"]); ?></li>
    <li class="list-group-item">Game ID: <?php echo($queryInfo["game_id"]); ?></li>
    <li class="list-group-item">Version: <?php echo($queryInfo["version"]); ?></li>
    <li class="list-group-item">Plugins: <?php echo($queryInfo["plugins"]); ?></li>
    <li class="list-group-item">Map: <?php echo($queryInfo["map"]); ?></li>

</ul>
<button type="button" class="btn btn-primary" id=relBtn>Reload Server</button>

<?php

?>


<?php }else{
    echo("Access denied");
} ?>