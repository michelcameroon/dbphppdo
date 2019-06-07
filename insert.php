<?php
echo "begin<br>";


include_once("connect.php");


try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

//$id = $_GET['id'];


$fields = $_GET;

//print_r($fields);

echo "<br>begin loop";

foreach ($fields as $key => $value) {
    echo "{$key} => {$value} ";
}

echo "end loop <br>";





//echo "id $id";

//echo "sqlUpdateRecord = $sqlUpdateRecord";



echo "sqlInsertRecord = $sqlInsertRecord";

echo "<br>begin loop";

foreach ($fields as $key => $value) {
    echo "{$key} ";
    //$sqlInsertRecord = $sqlInsertRecord . " " . "'" . $key . "'"; 
    echo "{$value}";
    if (is_numeric ($value))
       $sqlInsertRecord = $sqlInsertRecord . ",  $value "  ; 
    else
       $sqlInsertRecord = $sqlInsertRecord . ", ' $value '"  ; 


}

$sqlInsertRecord = $sqlInsertRecord . $sqlInsertRecordId;

echo "end loop <br>";



$sqlInsertRecord = $sqlInsertRecord . $sqlInsertRecordEnd ;


echo "sqlInsertRecord2 = $sqlInsertRecord";


//$sth = $dbh->prepare("SHOW COLUMNS FROM student");
//$sth = $dbh->prepare("select id, firstName, lastName FROM student$
$sth = $dbh->prepare($sqlInsertRecord);

$sth->execute();





