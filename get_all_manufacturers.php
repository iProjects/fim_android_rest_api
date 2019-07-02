
<?php
 
include_once 'dbconnection.php';
 
$response = array();
 
try{
	$database = new Connection();
 
    $db = $database->openConnection();
 
    $sql = "SELECT * FROM tblmanufacturers";
	
	$result = $db->query($sql);
	
	$response["manufacturers"] = array();
	
	$counta = 0;
	
    foreach ($result as $row) {
		
		$counta++;
		
		$dto = array();
		
		$dto['manufacturer_id'] = $row['manufacturer_id'];
		$dto['manufacturer_name'] = $row['manufacturer_name'];
		$dto['manufacturer_status'] = $row['manufacturer_status'];
		$dto['created_date'] = $row['created_date'];
		
		$response["manufacturers"][$counta] = $dto;
		 
    }
	 
	echo json_encode($response, JSON_FORCE_OBJECT);
	 
	$database->closeConnection();

}catch (PDOException $e){
	
	echo json_encode($e->getMessage());
	
}
 
?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 




