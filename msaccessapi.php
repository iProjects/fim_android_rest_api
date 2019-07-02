
<?php
  
//MS Access database connection
try{
    $db = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb)};Dbq=D:\files\my_db.mdb;Uid=Admin");
}
catch(PDOException $e) {
    echo $e->getMessage();
}
    
?> 

























