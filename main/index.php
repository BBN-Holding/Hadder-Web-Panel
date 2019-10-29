<?php

set_include_path('/var/www/vhosts/bigbotnetwork.wh.hostnation.de/httpdocs/t/');

 error_reporting(E_ALL);
 ini_set('display_errors', 1);

require "functions.php";
 require "discord.php";

 ?>
<!DOCTYPE html>
 <html>
    <head>
        <title>BigBotNetwork - Hadder</title>
    </head>
     <h2 style="color : red;">Hadder Dashboard</h2>
     <h1> User Details :</h1>
     <p> Name : <?php echo $_SESSION['username'] . '#'. $_SESSION['discrim']; ?></p>
     <p> ID : <?php echo $_SESSION['user_id']; ?></p>
     <p> Profile Picture : <img src="https://cdn.discordapp.com/avatars/<?php $extention = is_animated($_SESSION['user_avatar']); echo $_SESSION['user_id'] . "/" . $_SESSION['user_avatar'] . $extention; ?>" /></p>
     <br />
     <h1> User Guilds :</h1>
     <p> <?php echo json_encode($_SESSION['guilds']); ?></p>
     <h3 style="color:purple;"><a href="<?php echo url("637210984678948894", "http://bigbotnetwork.de/t/main/login.php", "identify guilds"); ?>">Oauth Link </a></h3>
 </html>