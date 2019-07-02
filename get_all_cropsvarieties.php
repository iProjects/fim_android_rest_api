
<?php
 
include_once 'dbconnection.php';
 
$response = array();
 
try{
	$database = new Connection();
 
    $db = $database->openConnection();
 
    $sql = "SELECT * FROM tblcropsvarieties";
	
	$result = $db->query($sql);
	
	$response["cropsvarieties"] = array();
	
	$counta = 0;
	
    foreach ($result as $row) {
		
		$counta++;
		
		$dto = array();
		
		$dto['crop_variety_id'] = $row['crop_variety_id'];
		$dto['crop_variety_name'] = $row['crop_variety_name'];
		$dto['crop_variety_status'] = $row['crop_variety_status'];
		$dto['crop_variety_crop_id'] = $row['crop_variety_crop_id'];
		$dto['crop_variety_manufacturer_id'] = $row['crop_variety_manufacturer_id'];
		$dto['created_date'] = $row['created_date'];
		
		$response["cropsvarieties"][$counta] = $dto;
		 
    }
	 
	echo json_encode($response, JSON_FORCE_OBJECT);
	 
	$database->closeConnection();

}catch (PDOException $e){
	
	echo json_encode($e->getMessage());
	
}
 
?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 




