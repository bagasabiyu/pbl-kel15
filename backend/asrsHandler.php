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

//-------pembagian alamat
if(isset($_POST['inputAdress'])){
	
	$add = $_POST['inputAdress'];

	if(isset($_POST['simpan']))
	{
		$stat	= 1;
	}

	if(isset($_POST['ambil']))
	{
		$stat	= 0;
	}
	
	if($stat == 1){
		/*simpan || kiri bawahDikit kanan atasDikit*/
		$keBarang = "190";
	}
	if($stat == 0){
		/*ambil || bawahDikit kiri atasDikit kanan*/
		$keBarang = "180";
	}
	
	if($add == 1){$alamat = "36".$keBarang."72";}
	if($add == 2){$alamat = "356".$keBarang."742";}
	if($add == 3){$alamat = "3556".$keBarang."7442";}

	if($add == 4){$alamat = "366".$keBarang."772";}
	if($add == 5){$alamat = "3566".$keBarang."7742";}
	if($add == 6){$alamat = "35566".$keBarang."77442";}

	if($add == 7){$alamat = "3666".$keBarang."7772";}
	if($add == 8){$alamat = "35666".$keBarang."77742";}
	if($add == 9){$alamat = "355666".$keBarang."777442";}
	
	$alamat;
	
	//input tabel ke log
	
	$query = "SELECT * FROM log WHERE id = '1'";
	$run = mysqli_query($conn, $query);
	if(mysqli_num_rows($run) > 0){
		$query = "UPDATE log SET adress = '$alamat', status = '$stat' WHERE id = '1'";
		$run = mysqli_query($conn, $query);
	}else{
		$query = "INSERT INTO log (id, adress, status) VALUES (DEFAULT,'$alamat' ,'$stat')";
		$run = mysqli_query($conn, $query);
	}
}