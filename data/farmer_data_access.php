<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>
<?php
	function addFarmerToDb($farmer){
		$query = "INSERT INTO Farmer(FarmerId, Name, District, Phone) VALUES('$farmer[FarmerId]', '$farmer[Name]', '$farmer[District]', '$farmer[Phone]')";
		return executeNonQuery($query);
	}	
	
	function editFarmerToDb($farmer){
		$query = "UPDATE Farmer SET Name='$farmer[Name]', District='$farmer[District]', Phone='$farmer[Phone]' WHERE FarmerId='$farmer[FarmerId]'";
		return executeNonQuery($query);
	}
	
	function removeFarmerFromDb($id){
		$query = "DELETE FROM Farmer WHERE FarmerId='$id'";
		return executeNonQuery($query);
	}
	
	function getAllFarmerFromDb(){
		$query = "SELECT FarmerId, Name, District, Phone FROM Farmer";  
		$result = executeQuery($query);	
		$farmerList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$farmerList[$i] = $row;				
			}
		}
		return $farmerList;
	}

	function getFarmerByIdFromDb($id){
		$query = "SELECT FarmerId, Name, District, Phone FROM Farmer WHERE FarmerId='$id'";  
		$result = executeQuery($query);	
		$farmer = null;
		if($result){
			$farmer = mysqli_fetch_assoc($result);
		}
		return $farmer;
	}
?>