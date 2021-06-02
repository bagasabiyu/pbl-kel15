<?php
//$url = parse_url(getenv(""));

//$host = $url['us-cdbr-east-04.cleardb.com'];
//$userdb = $url['b5adb8c40c1185'];
//$passdb = $url['e50ede65'];
//$db 	= substr($url['heroku_4ea9f046dd555f3'],1);

/*-- local --*///$conn = mysqli_connect('localhost', 'root', '', 'pk15d');
/*--  server --*/$conn = mysqli_connect('us-cdbr-east-04.cleardb.com', 'b5adb8c40c1185', 'e50ede65', 'heroku_4ea9f046dd555f3');
if (mysqli_connect_errno()){
    echo "DATABASE ERROR : " . mysqli_connect_error();
}
@session_start();
?>