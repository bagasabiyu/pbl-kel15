<?php

$conn = mysqli_connect("localhost","root","","pk15d");

if (mysqli_connect_errno()){
    echo "DATABASE ERROR : " . mysqli_connect_error();
}
@session_start();
?>