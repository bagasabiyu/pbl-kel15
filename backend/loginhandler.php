<?php

if(isset($_POST['submit']))
{
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	if(!empty($user . $pass))
	{
		$check = "SELECT * FROM user where user='$user' AND pass='$pass'";
		$run_check = mysqli_query($conn,$check);
		$row_check = mysqli_fetch_assoc($run_check);
		
		if($row_check > 0)
		{
			session_start();
			$_SESSION['uid'] = $row['id'];
			header('location:dashboard.php');
		}else{
			echo 'username atau password salah';
		}
	}
	
}

?>