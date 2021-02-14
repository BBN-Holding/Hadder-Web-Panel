<?php
set_include_path('/var/www/vhosts/bigbotnetwork.wh.hostnation.de/hadder/');

error_reporting(E_ALL);
ini_set('display_errors', 1);

require "discord.php";
require "functions.php";

session_destroy();

redirect("http://hadder.bbn.one/index.php");
?>
