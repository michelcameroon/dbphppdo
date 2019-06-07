<?php
echo "begin<br>";

print ("'<h1>' new record '</h1>'");


print ("<form action = 'insertList.php' method=get>");


/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'advance';
$password = 'ecnavda';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


//$sth = $dbh->prepare("SHOW COLUMNS FROM student");
$sth = $dbh->prepare("select * FROM student");
$sth->execute();

//while ($result)
//{

$result = $sth->fetch(PDO::FETCH_ASSOC);
while ($result)
{

  print_r($result);



  

  foreach($result as $key=>$value) {
  

  //print("PDO::FETCH_ASSOC: ");

    print ($key);
    print ($value);
    // do stuff
  }

  $result = $sth->fetch(PDO::FETCH_ASSOC);

}



/* Exercise PDOStatement::fetch styles */

/*
print("PDO::FETCH_ASSOC: ");
print("Return next row as an array indexed by column name\n");
$result = $sth->fetch(PDO::FETCH_ASSOC);
print_r($result);

foreach($result as $key=>$value) {

    print ($key);
    print ($value);
    // do stuff
}


//$sth = $dbh->prepare("SHOW COLUMNS FROM student");
//$sth = $dbh->prepare("select * FROM student");
//$sth->execute();
*/
/* Exercise PDOStatement::fetch styles */

/*
print("PDO::FETCH_ASSOC: ");
print("Return next row as an array indexed by column name\n");
$result = $sth->fetch(PDO::FETCH_ASSOC);
print_r($result);

foreach($result as $key=>$value) {

    print ($key);
    print ($value);
    // do stuff
}





print("\n");
*/

/*
//$count = $dbh->exec("insert into student values('','hans', 'name','','','','')$

$result = $dbh->exec("SHOW COLUMNS FROM student");
//$result = $dbh->query("SHOW COLUMNS FROM student");

echo "result $result";

//$result = mysql_query("SHOW COLUMNS FROM sometable");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
if (dbh->rowCount() > 0) {
    while ($row = dbh_fetch_assoc($result)) {
        print_r($row);
    }
}

*/
/*

print ("<table border=1>");

print ("<tr>");
print ("<td>");

//print ("id");
print ("<input type=hidden name='id' value=''>");

print ("</td>");
print ("</tr>");


print ("<tr>");
print ("<td>");




print ("first Name");

print ("</td>");
print ("<td>");

print ("<input type=text name='firstName' value=''>");

print ("</td>");
print ("</tr>");


print ("<tr>");
print ("<td>");


print("Last Name");


print ("</td>");
print ("<td>");



print ("<input type=text name='lastName' value=''>");



print ("</td>");
print ("</tr>");


print ("<tr>");
print ("<td>");




print("Address");


print ("</td>");
print ("<td>");



print ("<input type=text name='Address' value=''>");


print ("</td>");
print ("</tr>");


print ("<tr>");
print ("<td>");




print("City");


print ("</td>");
print ("<td>");



print ("<input type=text name='City' value=''>");


print ("</td>");
print ("</tr>");


print ("<tr>");
print ("<td>");




print("Gender");


print ("</td>");
print ("<td>");



print ("<input type=text name='gender' value=''>");



print ("</td>");
print ("</tr>");


print ("<tr>");
print ("<td>");




print("E-mail");


print ("</td>");
print ("<td>");



print ("<input type=text name='email' value=''>");



print ("</td>");
print ("</tr>");


print ("<tr>");
print ("<td>");


print ("<input type=submit value='save'>");

print ("</td>");
print ("</tr>");


print ("</table>");







print ("</form>");

*/


echo "<br />end";
?>
