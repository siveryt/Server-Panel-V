<?php
session_start(); if($_SESSION["login"] == true){
    
?>

<h1>Dashboard</h1><button type="button" class="btn btn-primary" id=relBtn>Reload Server</button>
<ul class="list-group list-group-flush">
    <li class="list-group-item">Server IP: 127.0.1.1:25565</li>
    <li class="list-group-item">
        <details>
            <summary>Players: 2/20 </summary>
            <!-- <ul class="list-group list-group-flush">
                <li class="list-group-item">NAME1</li>
                <li class="list-group-item">NAME2</li>
            </ul> -->
        </details>
    </li>
    <li class="list-group-item">MOTD: </li>
    <li class="list-group-item">Gametype: </li>
    <li class="list-group-item">Game ID: </li>
    <li class="list-group-item">Version: </li>
    <li class="list-group-item">Plugins: </li>
    <li class="list-group-item">Map: </li>

</ul>


<?php }else{
    echo("Access denied");
} ?>