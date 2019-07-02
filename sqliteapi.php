
<?php
 
//database credentials for SQLite database
try{
    $db_path = 'databases/subfolder/';
    $db_file = 'my_sqlite_db.db';
    $db_full_path = $db_path.$db_file;
 
    $db = new PDO("sqlite:".$db_full_path);
}
catch(PDOException $e) {
    echo $e->getMessage();
}
     
?> 

























