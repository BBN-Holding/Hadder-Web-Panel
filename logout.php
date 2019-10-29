<?php
set_include_path('/var/www/vhosts/bigbotnetwork.wh.hostnation.de/httpdocs/Hadder/');

error_reporting(E_ALL);
ini_set('display_errors', 1);

require "discord.php";
require "functions.php";

disconnect();

redirect("http://bigbotnetwork.de/Hadder/index.php");
?>