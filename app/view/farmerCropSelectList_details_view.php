<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<div class="container">
	<br /><h3>DETAILS: <?=$crop['Name']?> </h3><hr/><br />

	<b>CROP NAME</b>: <?=$crop['Name']?> <br />
	<b>GROUP</b>: <?=$crop['CropGroupName']?> <br />
	BEST IN <?=$region['Area']?> <br />
	<b>TIME PERIOD</b>: <?=$crop['TimePeriod']?> <br />
	<b>TOTAL COST</b>: <?=$crop['TotalCost']?> <br />
	<b>ESTIMATED PRODUCTION</b>: <?=$crop['EstimatedProduction']?> <br />
	<b>LAND TYPE</b>: <?=$crop['LandType']?> <br />
	<b>WATER SOURCE</b>: <?=$crop['WaterSource']?> <br /><br />
<?php
	if(isset($_SESSION['farmerid']))
		$addToCultivationLink='/AgriERP/?cultivation_add&cropid='.$crop['CropId'];
	else
		$addToCultivationLink='/AgriERP/?login_show';
?>
	<a href='<?=$addToCultivationLink?>' class="btn btn-primary">ADD TO CULTIVATION</a> | 
	<a href="/AgriERP/?cultivation_cropshow" class="btn btn-primary">SHOW ALL</a>
</div>
