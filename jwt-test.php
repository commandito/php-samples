
<?php
require __DIR__ . '/vendor/autoload.php';
use Firebase\JWT\JWT;

$key = "kenan";
$token = ["iss" => "hasscript.com",
    "aud" => "programla.co",
    "iat" => 1356999524,
    "nbf" => 1357000000
];

$jwt = JWT::encode($token, $key);
echo "token:".$jwt."<br/>";
$decoded = JWT::decode($jwt, $key, ["HS256"]);

print_r($decoded);

