<?php

set_include_path('/var/www/vhosts/bigbotnetwork.wh.hostnation.de/httpdocs/Hadder/');

error_reporting(E_ALL);
ini_set('display_errors', 1);

require "auth/functions.php";
require "auth/discord.php";

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
            <ul id="navList" class="right hide-on-med-and-down">
                 <?php
                    if(isset($_SESSION['auth_token'])) {
                        echo '<li id="user"><img id=userAvatar src="https://cdn.discordapp.com/avatars/';
                        echo $_SESSION['user_id'] . "/" . $_SESSION['user_avatar'] . '"/>';
                        echo $_SESSION['username'] . '#' . $_SESSION['discrim'];
                        echo '</li><li><a href="auth/logout.php"><i class="material-icons left">highlight_off</i>Logout</a></li></ul>';
                    } else {
                        echo '<a href="' . url("637002314162372639", "http://bigbotnetwork.de/Hadder/auth/login.php", "identify guilds email connections") . '">' . '<i class="material-icons left">account_circle</i>Login with Discord</a></li>';
                    }
                ?>
            </ul>
        </div>
    </nav>
    <?php
        if(isset($_SESSION['auth_token'])) {
            echo "<h1> User Guilds :</h1>";
            echo "<p>" . json_encode($_SESSION['guilds']) . "</p>";
            echo "<br />";
            echo "<h1> User Connections :</h1>";
            echo "<p>" . json_encode($_SESSION['connections']) . "</p>";
        }
    ?>
    <footer class="page-footer blue darken-2">
        <div class="footer-copyright">
            <div class="container">
                <div class="center">
                    <a class="github-button" href="https://github.com/gregtcltk" data-size="large" aria-label="Follow @GregTCLTK on GitHub">Follow @GregTCLTK</a>
                    <a class="github-button" href="https://github.com/bigbotnetwork/Hadder/subscription" data-icon="octicon-eye" data-size="large" aria-label="Watch Hadder on GitHub">Watch</a>
                    <a class="github-button" href="https://github.com/bigbotnetwork/hadder" data-icon="octicon-star" data-size="large" aria-label="Star Hadder on GitHub">Star</a>
                    <script async defer src="https://buttons.github.io/buttons.js"></script>
                    <a href="https://twitter.com/bigbotnetwork" class="twitter-follow-button right" data-size="large" data-show-count="false">Follow @BigBotNetwork</a>
                    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <p>© 2019 BigBotNetwork</p>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>