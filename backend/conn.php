<?php
$url = parse_url(getenv(""));

$host = $url['us-cdbr-east-04.cleardb.com'];
$userdb = $url['b5adb8c40c1185'];
$passdb = $url['e50ede65'];
$db 	= substr($url['heroku_4ea9f046dd555f3'],1);

$conn = mysqli_connect($host, $userdb, $passdb, $db);

if (mysqli_connect_errno()){
    echo "DATABASE ERROR : " . mysqli_connect_error();
}
@session_start();
?>