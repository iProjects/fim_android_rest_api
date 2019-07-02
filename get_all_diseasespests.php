
<?php
 
include_once 'dbconnection.php';
 
$response = array();
 
try{
	$database = new Connection();
 
    $db = $database->openConnection();
 
    $sql = "SELECT * FROM tblcropsdiseases";
	
	$result = $db->query($sql);
	
	$response["diseasespests"] = array();
	
	$counta = 0;
	
    foreach ($result as $row) {
		
		$counta++;
		
		$dto = array();
		
		$dto['crop_disease_id'] = $row['crop_disease_id'];
		$dto['crop_disease_name'] = $row['crop_disease_name'];
		$dto['crop_disease_category'] = $row['crop_disease_category'];
		$dto['crop_disease_status'] = $row['crop_disease_status'];
		$dto['created_date'] = $row['created_date'];
		
		$response["diseasespests"][$counta] = $dto;
		 
    }
	 
	echo json_encode($response, JSON_FORCE_OBJECT);
	 
	$database->closeConnection();

}catch (PDOException $e){
	
	echo json_encode($e->getMessage());
	
}
 
?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 




