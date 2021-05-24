<?php

require 'backend/conn.php';
require 'backend/asrsHandler.php';
if(@$_SESSION['uid'] != null)
{
	
}else{
	header('index.html');
}
?>
<head>
<style>
	.red {
		background-color: #ffcccc;
	}
	.grey {
		background-color: #d9d9d9;
	}
</style>
</head>
<h4>tabel rak</h4>
<table>
<?php
	require 'backend/tablefetch.php';
?>
</table>

<form action="" method="post">
	<span>
		<input type="number" name="inputAdress" placeholder="01"/>
	</span>
	<span>
		<table>
			<tr>
				<td><input type="submit" name="inputSimpan" value="simpan"/></td>
				<td><input type="submit" name="inputAmbil" value="ambil"/></td>
			<tr>
		</table>
	</span>
</form>
