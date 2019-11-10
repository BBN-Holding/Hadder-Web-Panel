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
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-5400V6B28P"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-5400V6B28P');
        </script>

        <title>BigBotNetwork - Hadder</title>
        <meta name="author" content="GregTCLTK">
        <meta name="author" content="Hax">
        <meta name="copyright" content="BigBotNetwork">
        <meta name="description" content="Web Panel for the Hadder Discord bot.">
        <meta name="keywords" content="BigBotNetwork, BBN, Hadder, Skidder, Hax, 6775, Big Bot Network, Discord, JDA, Java API"/>
        <meta name="language" content="DE">
        <meta name="coverage" content="Worldwide">
        <meta property="og:title" content="Hadder - Web Panel" />
        <meta property="og:type" content="website"/>
        <meta name="og:site_name" content="BigBotNetwork"/>
        <meta name="og:description" content="Web Panel for the Hadder Discord bot."/>
        <meta property="og:image" content="https://bigbotnetwork.de/img/BBN.png" />
        <meta property="og:url" content="https://bigbotnetwork.de/Hadder">

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>

        <link rel="stylesheet" href="css/main.css?v=1"/>
        <link rel="stylesheet" href="css/materialize.css">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    </head>

    <body class="is-preload">

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

    <div id="wrapper">

        <section id="main">
            <header>
                <span class="avatar"><img src="https://bigbotnetwork.de/images/avatar.png" width="159" height="150"/></span>
                <h1>BigBotNetwork</h1>
            </header>
            <footer>
                <ul class="icons">
                    <li><a href="https://twitter.com/BigBotNetwork" class="icon brands fa-twitter">Twitter</a></li>
                    <li><a href="https://github.com/BigBotNetwork" class="icon brands fa-github">GitHub</a></li>
                    <li><a href="https://discordapp.com/invite/Vf4zCYn" class="icon brands fa-discord">Discord</a></li>
                    <li><a href="https://donatebot.io/checkout/448554629282922527?buyer=477141528981012511" class="icon brands fa-paypal">Donatebot</a></li>
                </ul>
            </footer>
        </section>
    </div>

    <!-- Scripts -->
    <script>
        if ('addEventListener' in window) {
            window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
            document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
        }
    </script>



    <footer class="page-footer blue darken-2">
        <div class="footer-copyright">
            <div class="container">
                <div class="center">
                    <a href="//www.dmca.com/Protection/Status.aspx?ID=d10d5c07-b311-40d6-9d05-ef285be39ec5" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca_protected_sml_120m.png?ID=d10d5c07-b311-40d6-9d05-ef285be39ec5"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
                    <br>
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