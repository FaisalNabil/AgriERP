<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>
<br /><h3>SHOW CULTIVATION OF <?=$farmer['Name']?></h3><hr/><br />
<?php if($cultivationList[0]['Status'] == 'Ongoing'){
	?>
<table>
	<tr>
		<td><b>ID</b></td>
		<td><b>Crop Name</b></td>
		<td><b>Starting date</b></td>
		<td colspan="2"></td>
	</tr>
	<?php
		foreach($cultivationList as $cultivation){
			$cropName=getCropById($cultivation['CropId']);
			if ($cultivation['Status']=='Ongoing') {
				echo"<tr>
					<td>$cultivation[CultivationId]</td>
					<td>$cropName[Name]</td>
					<td>$cultivation[StartDate]</td>
					<td><a href='/AgriERP/?cultivation_details&cultivationid=$cultivation[CultivationId]'>DETAILS</a></td>
				</tr>";
			}
			
		}
	?>	
</table><hr / >
<?php
	}else
	echo '<h4>NO ONGOING CULTIVATION</h4><hr / >';
?>
<br /><a href="/AgriERP/?home_farmer">BACK TO FARMER HOME</a>
<br /><hr />
