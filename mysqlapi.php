
<?php
   
//database credentials for MySQL database
try{
    $host = 'localhost';
    $db_name = 'my_db';
    $user_name = 'root';
    $password  = '';

    $db = new PDO("mysql:host=$host;dbname=$db_name", $user_name, $password);
}
catch(PDOException $e) {
    echo $e->getMessage();
}
  
?> 

























