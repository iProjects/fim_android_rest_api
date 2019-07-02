
<?php

//database credentials for MS SQL database
try{
    $host = 'localhost';
    $db_name = 'my_db';
    $user_name = 'alam';
    $password  = '2Str0ngPW$';

    $db = new PDO("mssql:host=$host;dbname=$db_name, $user_name, $password");
}
catch(PDOException $e) {
    echo $e->getMessage();
}
  

?> 




 
 