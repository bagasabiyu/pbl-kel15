<?php

$adressFetch = "SELECT * FROM rak ORDER BY id";
$run = mysqli_query($conn,$adressFetch);
if(mysqli_num_rows($run)>0)
{
	$coloumnCount=0;
	
	while($data = mysqli_fetch_assoc($run))
	{
		if($data['status']==1)
		{
			$status='<div class="kotak red">'.$data['adress'].'</div>';
			$coloumnCount++;
		}
		if($data['status']==0)
		{
			$status='<div class="kotak green" class="green">'.$data['adress'].'</div>';
			$coloumnCount++;
		}
		if($coloumnCount<5)
		{
			echo $status;
		}
		if($coloumnCount>=5)
		{
			echo $status.'<div class="clear"></div>';
			$coloumnCount=0;
		}
	}
}
echo'</tr>';
?>