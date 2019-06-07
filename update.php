<?php
echo "begin<br>";


include_once("connect.php");


try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$id = $_GET['id'];


$fields = $_GET;

//print_r($fields);

echo "<br>begin loop";

foreach ($fields as $key => $value) {
    echo "{$key} => {$value} ";
}

echo "end loop <br>";





echo "id $id";

echo "sqlUpdateRecord = $sqlUpdateRecord";

echo "<br>begin loop";

foreach ($fields as $key => $value) {
    echo "{$key} ";
    $sqlUpdateRecord = $sqlUpdateRecord . "  " . $key . " = "; 
    echo "{$value}";
    if (is_numeric($value))
       $sqlUpdateRecord = $sqlUpdateRecord .  $value . " , " ; 
    else
       $sqlUpdateRecord = $sqlUpdateRecord . "'" . $value ."' , "; 


}

$count = strlen($sqlUpdateRecord);

$sqlUpdateRecord[$count-2] = " ";

echo "<br>count =$count<br>";

echo "<br>sqlUpdateRecord = $sqlUpdateRecord<br>";

//$sqlUpdateRecord[120] = "a";

$sqlUpdateRecord = $sqlUpdateRecord . $sqlUpdateRecordId;

echo "end loop <br>";



$sqlUpdateRecord = $sqlUpdateRecord . $id ;


echo "sqlUpdateRecord2 = $sqlUpdateRecord";


//$sth = $dbh->prepare("SHOW COLUMNS FROM student");
//$sth = $dbh->prepare("select id, firstName, lastName FROM student$
$sth = $dbh->prepare($sqlUpdateRecord);

$sth->execute();



