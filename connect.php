<?php

/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=richelle;host=127.0.0.1';
$user = 'advance';
$password = 'ecnavda';


//$tableName = "Beginners";
$tableName = "newlist";


$sql = "select * FROM " . $tableName;

$sqlAll = " select * from " . $tableName;



$sqlUpdate = "select * FROM" . $tableName . "where id=";
//$fieldList = array("id", "ProductName", "OrderDate"); 





$sqlUpdate = "select * FROM " . $tableName . " where id=";
//$fieldList = array("id", "ProductName", "OrderDate");//$sqlUpdateRecord = "update list set ProductName='p1123', OrderDate='2019-04-17' where id=";
$sqlUpdateRecord = "update " . $tableName . " set ";


$sqlUpdateRecordId = " where id=";

$sqlInsertRecord = "insert into " . $tableName . " values ('' ";


//$sqlInsertRecord = "insert into " . Ã$tableName . " values(  '', " ;
$sqlInsertRecordEnd = " )";

$sqlDeleteRecord = "delete from " . $tableName . " where id = ";
$sqlDleleteRecordEnd = " where id= ";



?>
