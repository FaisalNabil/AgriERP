<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php include 'navbar.php'; ?>

<div class="container">

<br /><h3>SHOW CROP</h3><hr/><br />
<table>
	<tr>
		<td><b>NAME</b></td>
		<td><b>GROUP</b></td>
		<td><b>TIME PERIOD</b></td>
		<td><b>TOTAL COST</b></td>
		<td><b>ESTIMAED PRODCTION</b></td>
		<td colspan="3"></td>
	</tr>
	<?php
		foreach($cropList as $crop){
			echo"<tr>
					<td>$crop[Name]</td>
					<td>$crop[CropGroupName]</td>
					<td>$crop[TimePeriod]</td>
					<td>$crop[TotalCost] tk.</td>
					<td>$crop[EstimatedProduction] kg</td>
					<td><a href='/AgriERP/?cropweeklytask_show&cropid=$crop[CropId]' class='btn btn-primary'>Show All Weekly Tasks</a></td>
					<td><a href='/AgriERP/?cropregion_edit&id=$crop[CropId]' class='btn btn-info'>edit</a></td>
					<td><a href='/AgriERP/?cropregion_delete&id=$crop[CropId]' class='btn btn-info'>delete</a></td>
				</tr>";
		}
	?>	
</table>
<br /><hr />

<br /><hr />
<a href="/AgriERP/?home_admin" class='btn btn-primary'>BACK TO ADMIN PANEL</a>
<br />