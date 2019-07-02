
<?php
 
include_once 'dbconnection.php';
 
$response = array();
 
try{
	$database = new Connection();
 
    $db = $database->openConnection();
 
    $sql = "SELECT * FROM tblcrops";
	
	$result = $db->query($sql);
	
	$response["crops"] = array();
	
	$counta = 0;
	
    foreach ($result as $row) {
		
		$counta++;
		
		$dto = array();
		
		$dto['crop_id'] = $row['crop_id'];
		$dto['crop_name'] = $row['crop_name'];
		$dto['crop_status'] = $row['crop_status'];
		$dto['created_date'] = $row['created_date'];
		
		$response["crops"][$counta] = $dto;
		 
    }
	 
	echo json_encode($response, JSON_FORCE_OBJECT);
	 
	$database->closeConnection();

}catch (PDOException $e){
	
	echo json_encode($e->getMessage());
	
}
 
?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 




