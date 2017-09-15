<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../error.php");
		die;
	}
?>
<?php include_once(APP_ROOT."/core/cultivation_service.php"); ?>
<?php

	switch($view){
		case "cropshow":
			$cropList = getAllCrop(); //Getting the model for view
			$name = "crops_show_view";
			if(count($cropList)>0){
				include_once(APP_ROOT."/app/view/farmerCropSelectList_show_view.php");
			}
			break;

		case "cropshowbysystem":
			if(isset($_SESSION['farmerid'])){
				$farmerid = $_SESSION['farmerid'];
				//echo $farmerid.'<br>';
				$farmer = getFarmerById($farmerid);
				//print_r( $farmer);
				$farmerArea = getRegionByArea($farmer['District']);
				//print_r($farmerArea) ;
				$cropList = getAllCropByRegion($farmerArea['RegionId']);
				//print_r($cropList) ;
				$name = "crops_by_system_show_view";
				if(count($cropList)>0){
					include_once(APP_ROOT."/app/view/farmerCropSelectList_show_view.php");
				}
			}
			break;

		case "cropdetails":
			if(isset($_GET['cropid'])){
				$id = $_GET['cropid'];
				$crop = getCropById($id); //Getting the model for view
				$region = getRegionById($crop['RegionId']);
				if($crop){
					include_once(APP_ROOT."/app/view/farmerCropSelectList_details_view.php");					
				}
			}
			break;

		case "add":
			include_once(APP_ROOT."/app/view/cultivation_add_view.php");
			break;

		case "show":
				$farmerid = $_SESSION['farmerid'];
				$cultivationList = getAllCultivation($farmerid); 
				$farmer = getFarmerById($farmerid);
				if($cultivationList){
					//print_r($cultivationList);
					include_once(APP_ROOT."/app/view/cultivation_show_view.php");					
				}
			
			break;

		case "details":
			if(isset($_GET['cultivationid'])){
				$cultivationid = $_GET['cultivationid'];
				$cultivation = getCultivationById($cultivationid); //Getting the model for view
				//print_r($cultivation);echo "<br/>";
				$crop = getCropById($cultivation['CropId']);
				//print_r($crop);echo "<br/>";
				$cultivationweeklytaskList = getCultivation_WeeklytaskByCultivationId($cultivationid);
				//print_r($cultivationweeklytaskList);//echo $cultivationid;
				if($cultivation){
					include_once(APP_ROOT."/app/view/cultivation_details_view.php");					
				}
			}
			break;

		case "end":
			if(isset($_GET['cultivationid'])){
				$cultivationid = $_GET['cultivationid'];
				$cultivation = getCultivationById($cultivationid);
				if($cultivation){
					include_once(APP_ROOT."/app/view/cultivation_end_view.php");					
				}
			}
			break;

		case "history":
			if(isset($_SESSION['farmerid'])){
				$farmerid = $_SESSION['farmerid'];
				$cultivationList = getAllCultivation($farmerid);
				if($cultivationList){
					include_once(APP_ROOT."/app/view/cultivation_history_view.php");					
				}
			}
			break;

		case "historydetails":
			if(isset($_GET['cultivationid'])){
				$cultivationid = $_GET['cultivationid'];
				$cultivation = getCultivationById($cultivationid);
				$crop = getCropById($cultivation['CropId']);
				if($cultivation){
					include_once(APP_ROOT."/app/view/cultivation_history_details_view.php");					
				}
			}
			break;

		default:
			include_once(APP_ROOT."/app/error.php");
	}	
?>