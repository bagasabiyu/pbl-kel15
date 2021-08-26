<?php
require 'conn.php';
$query = "SELECT * FROM log WHERE id = '1'";
$run = mysqli_query($conn, $query);
if(mysqli_num_rows($run) > 0){
	$row = mysqli_fetch_assoc($run);
	$var = $row['adress'];
	$nil = $row['status'];
	echo'var = '.$var.'</br>nilai = '.$nil.'</br></br>';
}

?>