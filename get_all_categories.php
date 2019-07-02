
<?php
 
include_once 'dbconnection.php';
 
$response = array();
 
try{
	$database = new Connection();
 
    $db = $database->openConnection();
 
    $sql = "SELECT * FROM tblcategories";
	
	$result = $db->query($sql);
	
	$response["categories"] = array();
	
	$counta = 0;
	
    foreach ($result as $row) {
		
		$counta++;
		
		$dto = array();
		
		$dto['category_id'] = $row['category_id'];
		$dto['category_name'] = $row['category_name'];
		$dto['category_status'] = $row['category_status'];
		$dto['created_date'] = $row['created_date'];
		
		$response["categories"][$counta] = $dto;
		 
    }
	 
	echo json_encode($response, JSON_FORCE_OBJECT);
	 
	$database->closeConnection();

}catch (PDOException $e){
	
	echo json_encode($e->getMessage());
	
}
 
?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 




