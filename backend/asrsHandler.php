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
	//echo'query';
	$query = "UPDATE rak SET status = '$stat' WHERE adress = '$add'";
	mysqli_query($conn, $query);
}

?>