<?php session_start(); if($_SESSION["login"] == true){
    
    $function = isset($_GET["func"]) ? $_GET["func"] : "dashboard"

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Server Panel V</title>
</head>

<body>

    <!-- <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">Server Panel V</a>
        <div class="navbar-nav">
            <a class="nav-item nav-link" href=interface?func=dashboard>Dashboard</a>
            <a class="nav-item nav-link" href=interface?func=player>Player</a>
            <a class="nav-item nav-link" href=interface?func=console>Console</a>
            <a class="nav-item nav-link" href=interface?func=settings>Settings</a>
        </div>
    </nav> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Server Panel V</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="interface.php?func=dashboard">Dashboard <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="interface.php?func=player">Player</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="interface.php?func=console">Console</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="interface.php?func=settings">Settings</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>

        <?php
    require("functions/$function.php");
    ?>

    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>

<?php }else{
    echo("Access denied");
} ?>