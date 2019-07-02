
<?php
 
Class Connection {
  
//Using MySQL (connection via network, optionally you can specify the port too):
//public $server = "mysql:host=127.0.0.1;port=3306;dbname=testdb;charset=utf8";
//Or Postgres
//public $server = "pgsql:host=localhost;port=5432;dbname=testdb;";
//Or even SQLite
//public $server = "sqlite:/path/to/database";
 
 // $queryString = parse_url($url, PHP_URL_QUERY);
 // $params = [];
// parse_str($queryString, $params);

// $dbname = isset($_POST["dbname"]) ? $_POST["dbname"] : "ntharenedb";

public $server = "mysql:host=127.0.0.1;port=3306;dbname=ntharenedb";
 
public $user = "sa";
 
public $pass = "123456789";
 
public $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
 
public $con;
 
public function openConnection()

{

   try

	 {

		$this->con = new PDO($this->server, $this->user,$this->pass,$this->options);

		return $this->con;

	  }

   catch (PDOException $e)

	 {

		 echo "There is some problem in connection: " . $e->getMessage();

	 }

}
 
public function closeConnection() {
 
   	$this->con = null;
 
	}
 
}
 
?>