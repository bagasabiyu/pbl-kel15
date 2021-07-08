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

$alamat;
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
		$naikTurun = "190";
	}
	if($stat == 0){
		/*ambil || bawahDikit kiri atasDikit kanan*/
		$naikTurunDikit = "180";
	}
	
	//simpan
	if($add == 1 && $stat == 1){$alamat = "86".$naikTurun."7";}
	if($add == 2 && $stat == 1){$alamat = "586".$naikTurun."74";}
	if($add == 3 && $stat == 1){$alamat = "5586".$naikTurun."744";}

	if($add == 4 && $stat == 1){$alamat = "866".$naikTurun."77";}
	if($add == 5 && $stat == 1){$alamat = "5866".$naikTurun."774";}
	if($add == 6 && $stat == 1){$alamat = "55866".$naikTurun."7744";}

	//ambil
	if($add == 1 && $stat == 0){$alamat = "6".$naikTurunDikit."79";}
	if($add == 2 && $stat == 0){$alamat = "56".$naikTurunDikit."794";}
	if($add == 3 && $stat == 0){$alamat = "556".$naikTurunDikit."7944";}

	if($add == 4 && $stat == 0){$alamat = "66".$naikTurunDikit."779";}
	if($add == 5 && $stat == 0){$alamat = "566".$naikTurunDikit."7794";}
	if($add == 6 && $stat == 0){$alamat = "5566".$naikTurunDikit."77944";}
	
	//misc
	if($add == 7){$alamat = $add;}
	if($add == 8){$alamat = $add;}
	if($add == 9){$alamat = $add;}
	
	if($add == 10){$alamat = $add;}
	if($add == 11){$alamat = $add;}
	if($add == 12){$alamat = $add;}
	
	if($add == 13){$alamat = $add;}
	if($add == 14){$alamat = $add;}
	if($add == 15){$alamat = "3";}
	
	if($add == 16){$alamat = "2";}
	if($add == 17){$alamat = $add;}
	if($add == 18){$alamat = $add;}
	
	if($add == 19){$alamat = $add;}
	if($add == 20){$alamat = $add;}
	
	
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