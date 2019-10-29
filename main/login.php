<?php
set_include_path('/var/www/vhosts/bigbotnetwork.wh.hostnation.de/httpdocs/t/');

error_reporting(E_ALL);
ini_set('display_errors', 1);

require "discord.php";
require "functions.php";

init("", "http://bigbotnetwork.de/t/main/login.php", "637210984678948894", "");

get_user();

$_SESSION['guilds'] = get_guilds();

redirect("http://bigbotnetwork.de/t/main/index.php");
?>


