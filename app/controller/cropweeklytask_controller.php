<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../error.php");
		die;
	}
?>
<?php include_once(APP_ROOT."/core/cropweeklytask_service.php"); ?>
<?php include_once(APP_ROOT."/core/fertilizer_service.php"); ?>
<?php include_once(APP_ROOT."/core/insecticide_service.php"); ?>
<?php
	switch($view){
		case "add":
			include_once(APP_ROOT."/app/view/cropweeklytask_add_view.php");
			break;
			
		case "edit":
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$crop_Weeklytask = getCrop_WeeklytaskById($id); //Getting the model for view
				if($crop_Weeklytask){
					include_once(APP_ROOT."/app/view/cropweeklytask_edit_view.php");					
				}
			}
			break;
			
		case "delete":
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$crop_Weeklytask = getCrop_WeeklytaskById($id); //Getting the model for view
				print_r($crop_Weeklytask);
				$fertilizer = getFertilizerById($crop_Weeklytask['CropFertSysId']);
				print_r($fertilizer);
				$insecticide = getInsecticideById($crop_Weeklytask['CropInsectSysId']);
				print_r($insecticide);
				if($crop_Weeklytask){
					include_once(APP_ROOT."/app/view/cropweeklytask_delete_view.php");
				}
			}
			break;
			
		case "show":
			if(isset($_GET['cropid'])){
				$id = $_GET['cropid'];
				$crop_WeeklytaskList = getCrop_WeeklytaskByCropId($id); //Getting the model for view
				if(count($crop_WeeklytaskList)>0){
					include_once(APP_ROOT."/app/view/cropweeklytask_show_view.php");
				}
				break;
			}
		default:
			include_once(APP_ROOT."/app/error.php");
	}	
?>