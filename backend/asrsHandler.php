<?php

$err = 1;

if(isset($_POST['simpan']))
{
	//echo'simpan';
	$add	= $_POST['inputAdress'];
	$stat	= 1;
	$err	= 0;
}

if(isset($_POST['ambil']))
{
	//echo'ambil';
	$add	= $_POST['inputAdress'];
	$stat	= 0;
	$err	= 0;
}

if($err == 0)
{
	$query = "UPDATE rak SET status = '$stat' WHERE adress = '$add'";
	mysqli_query($conn, $query);
}
//input ke tabel log
if (isset($_POST['inputAdress'])){
	$query = "SELECT * FROM log WHERE id = '1'";
	$run = mysqli_query($conn, $query);
	if(mysqli_num_rows($run) > 0){
		$query = "UPDATE log SET adress = '$add', status = '$stat' WHERE id = '1'";
		$run = mysqli_query($conn, $query);
	}else{
		$query = "INSERT INTO log (adress ,status) VALUES (DEFAULT,'$add' ,'$stat')";
		$run = mysqli_query($conn, $query);
	}
}

?>