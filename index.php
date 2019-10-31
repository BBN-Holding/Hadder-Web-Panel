<?php

set_include_path('/var/www/vhosts/bigbotnetwork.wh.hostnation.de/httpdocs/Hadder/');

error_reporting(E_ALL);
ini_set('display_errors', 1);

require "functions.php";
require "discord.php";

 ?>
<!DOCTYPE html>
 <html>
    <head>
        <title>BigBotNetwork - Hadder</title>
        <meta name="author" content="GregTCLTK">
        <meta name="author" content="Hax">
        <meta name="description" content="Web Panel for the Hadder bot.">
        <meta property="og:title" content="Hadder - Web Panel" />
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="https://bigbotnetwork.de/img/BBN.png" />
        <meta property="og:url" content="https://bigbotnetwork.de/Hadder">

        <link type="text/css" rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/materialize.css">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    </head>
    <body>
    <nav class="blue darken-2" role="navigation">
        <div class="nav-wrapper container">
            <img id="navbarIcon" src="https://bigbotnetwork.de/img/Hadder.png">
            <a id="logo-container" href="./" class="brand-logo">Hadder</a>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="navList" class="right hide-on-med-and-down">
                 <?php
                    if(isset($_SESSION['auth_token'])) {
                        echo '<li id="user"><img id=userAvatar src="https://cdn.discordapp.com/avatars/';
                        echo $_SESSION['user_id'] . "/" . $_SESSION['user_avatar'] . '"/>';
                        echo $_SESSION['username'] . '#' . $_SESSION['discrim'];
                        echo '</li><li><a href="logout.php"><i class="material-icons left">highlight_off</i>Logout</a></li></ul>';
                    } else {
                        echo '<a href="' . url("637002314162372639", "http://bigbotnetwork.de/Hadder/login.php", "identify guilds") . '">' . '<i class="material-icons left">account_circle</i>Login with Discord</a></li></ul>';
                    }
                ?>
        </div>
    </nav>
        <h2 style="color : red;">Hadder Dashboard</h2>
        <h1> User Details :</h1>
        <p> ID : <?php echo $_SESSION['user_id']; ?></p>
        <br />
        <h1> User Guilds :</h1>
        <p> <?php echo json_encode($_SESSION['guilds']); ?></p>
    </body>
</html>