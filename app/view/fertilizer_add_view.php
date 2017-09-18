<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<?php include 'navbar.php'; ?>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){		
		$name = $_POST['name'];
		$pricePerUnit = $_POST['pricePerUnit'];
		$fertilizer = array("Name"=>$name, "PricePerUnit"=>$pricePerUnit);
		
		if(addFertilizer($fertilizer)){
			echo "Record Added!";
		}
	}
?>
<div class="container">

<form method="post">
	<br /><h3>ADD FERTILIZER</h3><hr/><br />
	Name:<br /><input type="text" name="name"/><br />
	Price Unit:<br /><input type="number" name="pricePerUnit"/><br />
	
	<input type="submit" value="Add" class='btn btn-primary'/>
	<a href="/AgriERP/?fertilizer_show" class="btn btn-info">SHOW ALL</a>
</form>
<br /><hr />
<a href="/AgriERP/?home_admin" class="btn btn-primary">BACK TO ADMIN PANEL</a>
<br />
</div>