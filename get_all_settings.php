
<?php
 
include_once 'dbconnection.php';
 
$response = array();
 
try{
	$database = new Connection();
 
    $db = $database->openConnection();
 
    $sql = "SELECT * FROM tblsettings";
	
	$result = $db->query($sql);
	
	$response["settings"] = array();
	
	$counta = 0;
	
    foreach ($result as $row) {
		
		$counta++;
		
		$dto = array();
		
		$dto['setting_id'] = $row['setting_id'];
		$dto['setting_name'] = $row['setting_name'];
		$dto['setting_value'] = $row['setting_value'];
		$dto['setting_status'] = $row['setting_status'];
		$dto['created_date'] = $row['created_date'];
		
		$response["settings"][$counta] = $dto;
		 
    }
	 
	echo json_encode($response, JSON_FORCE_OBJECT);
	 
	$database->closeConnection();

}catch (PDOException $e){
	
	echo json_encode($e->getMessage());
	
}
 
?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 




