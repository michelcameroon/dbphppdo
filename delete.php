<?php
echo "begin<br>";


include_once("connect.php");


try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$id = $_GET['id'];


//$fields = $_GET;

//print_r($fields);
/*
echo "<br>begin loop";

foreach ($fields as $key => $value) {
    echo "{$key} => {$value} ";
}

echo "end loop <br>";


*/


echo "id $id";

//echo "sqlUpdateRecord = $sqlUpdateRecord";



//echo "sqlInsertRecord = $sqlInsertRecord";
/*
echo "<br>begin loop";

foreach ($fields as $key => $value) {
    echo "{$key} ";
    //$sqlInsertRecord = $sqlInsertRecord . " " . "'" . $key . "'"; 
    echo "{$value}";
    $sqlInsertRecord = $sqlInsertRecord . '" , ' . $value . '"'  ; 


}

$sqlInsertRecord = $sqlInsertRecord . $sqlInsertRecordId;

echo "end loop <br>";

*/

$sqlDeleteRecord = $sqlDeleteRecord . $sqlDeleteRecordEnd . $id;


echo "sqlDeleteRecord2 = $sqlDeleteRecord";


//$sth = $dbh->prepare("SHOW COLUMNS FROM student");
//$sth = $dbh->prepare("select id, firstName, lastName FROM student$
$sth = $dbh->prepare($sqlDeleteRecord);

$sth->execute();





