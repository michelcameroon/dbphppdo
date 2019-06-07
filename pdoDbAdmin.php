<?php echo "begin<br>";

/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'advance';
$password = 'ecnavda';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}




/* insert one row from the FRUIT table */
$count = $dbh->exec("insert into student values('','hans', 'name','','','','')");

/* Return number of rows that were deleted */
print("insert $count rows.\n");

$count = $dbh->exec("update student set firstName ='haaaaaans' where id = 6");


print("update $count rows.\n");



/* Delete all rows from the FRUIT table */
$count = $dbh->exec("delete from student where id>5 and id < 10");

/* Return number of rows that were deleted */
print("delete $count rows.\n");

print ("<form action='newRecord.php' method=get>");

print ("<input type = submit value='new record'>");
print ("</form>");


print ("<table border=1>");

$sql = 'SELECT * FROM student ORDER BY firstName';
foreach ($dbh->query($sql) as $row) {
    print ("<tr>");
    print ("<td>");

    $id = $row['id'];

    print $row['firstName'] ;

    print ("</td>");
    print ("<td>");

    print $row['lastName'] ;

    print ("</td>");
    print ("<td>");

    print ("<form action='updateRecord.php' method=get>");
    print ("<input type='hidden' name='id' value=$id>");
    //print ("<input type='hidden' name='id' value=$row['id']>");
    print ("<input type = submit value='update'>");
    print ("</form>");



    
    print ("</td>");

    print "</tr>";
}

print ("</table>");

/* Execute a prepared statement by passing an array of values */
$sql = 'SELECT firstName, lastName
    FROM student
    WHERE firstName = "kuh"';


$sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

$sth->execute(array(':lastName' => "vegemteh"));
$red = $sth->fetchAll();
//$sth->execute(array(':calories' => 175, ':colour' => 'yellow'));
//$yellow = $sth->fetchAll();

echo $red;







echo "<br>ende";
?>


