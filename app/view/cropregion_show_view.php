<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

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
					<td>$crop[TotalCost]</td>
					<td>$crop[EstimatedProduction]</td>
					<td><a href='/AgriERP/?cropweeklytask_add&id=$crop[CropId]'>Add Week Task</a></td>
					<td><a href='/AgriERP/?cropregion_edit&id=$crop[CropId]'>edit</a></td>
					<td><a href='/AgriERP/?cropregion_delete&id=$crop[CropId]'>delete</a></td>
				</tr>";
		}
	?>	
</table>
<br /><hr />