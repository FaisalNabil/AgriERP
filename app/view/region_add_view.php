<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){	
		$regionNumber = $_POST['regionNumber'];
		$area = $_POST['area'];
		$region = array("RegionNumber"=>$regionNumber, "Area"=>$area);
		
		if(addRegion($region)){
			echo "Record Added!";
		}
	}
?>
<form method="post">
	<br /><h3>ADD REGION</h3><hr/><br />
	Region Number:<br /><input type="text" name="regionNumber"/><br />
	Area:<br /><input type="text" name="area"/><br />
	
	<input type="submit" value="Add"/>
	<a href="/AgriERP/?region_show">SHOW ALL</a>
</form>