<?php

$adressFetch = "select * from rak ORDER BY id";
$run = mysqli_query($conn,$adressFetch);
echo'<tr>';
if(mysqli_num_rows($run)>0)
{
	$coloumnCount=0;
	
	while($data = mysqli_fetch_assoc($run))
	{
		if($data['status']==1)
		{
			$status='<td class="red">'.$data['adress'].'</td>';
			$coloumnCount++;
		}
		if($data['status']==0)
		{
			$status='<td class="grey">'.$data['adress'].'</td>';
			$coloumnCount++;
		}
		if($coloumnCount<5)
		{
			echo $status;
		}
		if($coloumnCount>=5)
		{
			echo $status.'</tr><tr>';
			$coloumnCount=0;
		}
	}
}
echo'</tr>';
?>