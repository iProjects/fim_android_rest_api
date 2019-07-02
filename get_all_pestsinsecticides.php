
<?php
 
include_once 'dbconnection.php';
 
$response = array();
 
try{
	$database = new Connection();
 
    $db = $database->openConnection();
 
    $sql = "SELECT * FROM tblpestsinsecticides";
	
	$result = $db->query($sql);
	
	$response["pestsinsecticides"] = array();
	
	$counta = 0;
	
    foreach ($result as $row) {
		
		$counta++;
		
		$dto = array();
		
		$dto['pestinsecticide_id'] = $row['pestinsecticide_id'];
		$dto['pestinsecticide_name'] = $row['pestinsecticide_name'];
		$dto['pestinsecticide_category'] = $row['pestinsecticide_category'];
		$dto['pestinsecticide_status'] = $row['pestinsecticide_status'];
		$dto['created_date'] = $row['created_date'];
		$dto['pestinsecticide_crop_disease_id'] = $row['pestinsecticide_crop_disease_id'];
		$dto['pestinsecticide_manufacturer_id'] = $row['pestinsecticide_manufacturer_id'];
		
		$response["pestsinsecticides"][$counta] = $dto;
		 
    }
	 
	echo json_encode($response, JSON_FORCE_OBJECT);
	 
	$database->closeConnection();

}catch (PDOException $e){
	
	echo json_encode($e->getMessage());
	
}
 
?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 




