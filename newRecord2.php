<?php
echo "begin<br>";


include_once("connect.php");

print ("<h1> new record </h1>");


try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

echo "dbh = $dbh";


echo "tableName = $tableName";


echo "dbh = $dbh";

