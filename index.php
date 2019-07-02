
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
SQLite connection


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
MS Access connection


//MS Access database connection
try{
    $db = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb)};Dbq=D:\files\my_db.mdb;Uid=Admin");
}
catch(PDOException $e) {
    echo $e->getMessage();
}
 
//MS Access database connection
try{
    $db = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb)};Dbq=D:\files\my_db.mdb;Uid=Admin");
}
catch(PDOException $e) {
    echo $e->getMessage();
}
MySQL connection


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

























