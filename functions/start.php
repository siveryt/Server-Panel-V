<?php
session_start(); if($_SESSION["login"] == true){
    require("data/cred.php");
    require("data/server.php");
    $_SESSION["server"] = null;
    ?>

<div class="jumbotron">
  <h1 class="display-4">Heyho <?php echo($login_cred[$_SESSION["username"]]["name"]); ?>!</h1>
  <p class="lead">Thanks that you use Server Panel V! If you find bugs, please report these here: <a href="mailto:bugs@sivery.de?subject=I've%20found%20a%20bug%20on%20project%20%235f8ed">bugs@sivery.de</a> </p>
  <hr class="my-4">
  <p>To continue, please select a server you want to control below.</p>
  <p class="lead">
  <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Server
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <?php
                        foreach($server as $selectedServer){
                        echo('<a class="dropdown-item" href="selectServer.php?server='.$selectedServer["id"].'&func=dashboard">'.$selectedServer["name"].'</a>');
                        } ?>
                    </div>
                </div>
            </div>
  </p>
</div>

<?php }else{
    echo("Access denied");
} ?>