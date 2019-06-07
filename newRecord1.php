<?php
echo "begin<br>";
exit();

print ("<h1> new record </h1>");


/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'advance';
$password = 'ecnavda';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}



//$sth = $dbh->prepare("SELECT * FROM student where id=10");
//$sth->execute();

/* Fetch all of the remaining rows in the result set */
//print("Fetch all of the remaining rows in the result set:\n");
//$result = $sth->fetchAll();



//print_r($result);

/*
foreach ( $result as $key => $value ) {



  print ("key $key");
  print ("value $value");

*/
/*
  foreach ( $value as $key1 => $value1){
    print ("key1 $key1");
    print ("value1 $value1");
  }
*/ £

//}


/*

$sth = $dbh->prepare("SELECT * FROM student");
$sth->execute();

print("Fetch the first column from the first row in the result set:\n");
$result = $sth->fetchColumn(1); 

print ("result $result");


foreach($result as $key=>$value) {

  print ("key $key");
  print ("value $value");


}





*/



/*
$sth = $dbh->prepare("DESCRIBE rl_zones");
$sth->execute();
$fieldsArray = $sth->fetchAll(PDO::FETCH_COLUMN);

foreach($fieldArray as $key=>$value) {

  print ("key $key");
  print ("value $value");


}
//print_r($table_fields);
*/






/*

print ("<form action = 'insert.php' method=get>");

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

echo "end</br>";
?>
