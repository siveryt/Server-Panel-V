<?php session_start(); if($_SESSION["login"] == true){
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

//   echo($response[1]);
?>
<ul class="list-group list-group-flush">
    <?php

if($queryInfo["game_id"] == ""){?>
    <div class="alert alert-danger" role="alert">
        <?php echo("Server is offline or some error occurred"); ?>
    </div>
<?php }else{

foreach ($queryInfo["players"] as $playerName){
    
    $response = file_get_contents("https://api.mojang.com/users/profiles/minecraft/$playerName");
    $response = json_decode($response);?>
    <li class="list-group-item"><img style="height:3rem;"
            src=https://visage.surgeplay.com/face/<?php echo($response->id); ?>> &nbsp; <?php echo($response->name) ?>
        <div class=liBtns><button type="button" class="btn btn-danger" data-toggle="modal"
                data-target="#banModal<?php echo($response->id) ?>">Ban!</button><button type="button"
                class="btn btn-danger">Kick!</button></div>
    </li>
    <div class="modal fade" id="banModal<?php echo($response->id) ?>" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ban <?php echo($response->name) ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="ban<?php echo($response->id) ?>" action="shortcutExecute.php" method="post">
                    <div class="modal-body">
                        Do you really want to ban <?php echo($response->name) ?><br/>
                        <input type=text placeholder="Reason" name="reason">
                        <input type=hidden name=action value=ban>
                        <input type=hidden name=player value="<?php echo($response->player)?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
}
}
?>

</ul>

<?php }else{
    echo("Access denied");
} ?>