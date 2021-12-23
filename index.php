<?php  
require "vendor/autoload.php";
use \Firebase\JWT\JWT;


$key = "XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX"; //ApiKey
$transactionId = rand();

$token = [
    'jti' => $transactionId,
    "iss" => "XXXXXXXXXXXXXXXXXXXX", //ApiIdentifier
    "iat" => time()
];
$jwt = JWT::encode($token, $key);

echo 'Token: '.$jwt;




die();
?>