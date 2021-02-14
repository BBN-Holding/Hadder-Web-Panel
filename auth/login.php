<?php
set_include_path('/var/www/vhosts/bigbotnetwork.wh.hostnation.de/hadder/');

error_reporting(E_ALL);
ini_set('display_errors', 1);

require "discord.php";
require "functions.php";

init("", "http://hadder.bbn.one/auth/login.php", "637002314162372639", "");

get_user();

$url = "https://canary.discordapp.com/api/webhooks/";

$hookObject = json_encode([

    "username" => "Web Panel Logger",
    "avatar_url" => "https://bbn.one/images/Hadder.png",
    "embeds" => [
        [
            "title" => "New Login",
            "type" => "rich",
            "description" => "New User logged in",
            "url" => "https://hadder.bbn.one",
            "timestamp" => date('Y-m-d\TH:i:s.Z\Z', time()),
            "color" => hexdec( "2F5E69" ),

            "footer" => [
                "text" => "Web Panel Logger",
                "icon_url" => "https://bbn.one/images/Hadder.png"
            ],

            "thumbnail" => [
                "url" => "https://cdn.discordapp.com/avatars/" .  $_SESSION['user_id'] . "/" . $_SESSION['user_avatar']
            ],

            "fields" => [
                [
                    "name" => "User",
                    "value" => $_SESSION['username'] . '#' . $_SESSION['discrim'],
                    "inline" => true
                ],
                [
                    "name" => "ID",
                    "value" => $_SESSION['user_id'],
                    "inline" => true
                ],
                [
                    "name" => "E-Mail",
                    "value" => $_SESSION['email'],
                    "inline" => true
                ]
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

$ch = curl_init();

curl_setopt_array( $ch, [
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $hookObject,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json"
    ]
]);

$response = curl_exec( $ch );
curl_close( $ch );

redirect("http://hadder.bbn.one/index.php");
