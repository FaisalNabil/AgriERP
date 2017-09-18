<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php include 'navbar.php'; ?>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){	
		
		$id = $_POST['fertilizerId'];
		$name = $_POST['name'];
		$pricePerUnit = $_POST['pricePerUnit'];

		$fertilizer = array("FertilizerId"=>$id, "Name"=>$name, "PricePerUnit"=>$pricePerUnit);
		
		if(editFertilizer($fertilizer)){
			echo "Record Updated!";
		}
	}
?>
<div class="container">
<form method="post">
	<br /><h3>EDIT FERTILIZER</h3><hr/><br />
	Fertilizer Id: <?=$fertilizer['FertilizerId']?><input type="hidden" name="fertilizerId" value="<?=$fertilizer['FertilizerId']?>"/><br />
	Name: <input type="text" name="name" value="<?=$fertilizer['Name']?>"/><br />
	PricePer Unit: <input type="text" name="pricePerUnit" value="<?=$fertilizer['PricePerUnit']?>"/><br />

	<input type="submit" value="Update" class='btn btn-primary' />
	<a href="/AgriERP/?fertilizer_show" class="btn btn-info">SHOW ALL</a>
</form>

<br /><hr />
<a href="/AgriERP/?home_admin" class="btn btn-primary">BACK TO ADMIN PANEL</a>
<br />
</div>