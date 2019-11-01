<?php
set_include_path('/var/www/vhosts/bigbotnetwork.wh.hostnation.de/httpdocs/Hadder/');

error_reporting(E_ALL);
ini_set('display_errors', 1);

require "discord.php";
require "functions.php";

init("", "http://bigbotnetwork.de/Hadder/auth/login.php", "637002314162372639", "");

get_user();

$_SESSION['guilds'] = get_guilds();

redirect("http://bigbotnetwork.de/Hadder/index.php");
?>