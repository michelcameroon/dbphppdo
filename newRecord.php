<?php
echo "begin<br>";


include_once("connect.php");

print ("<h1> new record </h1>");


try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

//echo "dbh = $dbh";


//echo "tableName = $tableName";


//echo "dbh = $dbh";


$statement = $dbh->query('DESC ' . $tableName);

//$statement = $dbh->query('select * from list');
$sth = $dbh->prepare($statement);


$result = $statement->fetchAll(PDO::FETCH_ASSOC);
 
//echo "result = $result";



//The result should be an array of arrays,
//with each array containing information about the columns
//that the table has.
var_dump($result);


/*
echo "<br>foreach<br>"; 
//For the sake of this tutorial, I will loop through the result
//and print out the column names and their types.
foreach($result as $column){
    echo $column['Field'] . ' - ' . $column['Type'], '<br>';
}



echo "<br>after sth<br>";
*/
print("<form action='insert.php' method=get>");

print ("<table border=1>");


foreach($result as $column){
//    echo $column['Field'] . ' - ' . $column['Type'], '<br>';



    $field = $column['Field'] ;
 
    if ($field !="id")
    {
       print ("<tr>");

       print ("<td>");


       echo $field;

       print ("</td>");

       print ("<td>");

//    print ("<input type=text name=$column['Field'] value=''>");
       print ("<input type=text name=$field value=''>");

       print ("</td>");


       print ("</tr>");
    }
}

print ("<tr>");
print ("<td>");
print ("<input type=submit value='insert'>");
print ("</td>");
print ("</tr>");


print ("</table>");


//$sth = $dbh->prepare($sqlNewRecord);


//$statement = $dbh->query('select * from list');

//$statement = $dbh->prepare('select * from list');

//$sth = $dbh->prepare($sqlNewRecord);





//$statement = $dbh->query('DESCRIBE ' . $tableName);

//echo "statement = $statement";


/*
//Fetch our result.
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
 
echo "result = $result";


//The result should be an array of arrays,
//with each array containing information about the columns
//that the table has.
var_dump($result);



echo "foreach"; 
//For the sake of this tutorial, I will loop through the result
//and print out the column names and their types.
foreach($result as $column){
    echo $column['Field'] . ' - ' . $column['Type'], '<br>';
}

*/

/*
//$sth = $dbh->prepare("SELECT * FROM student where id=10");
$sqlNewRecord = "select * from " . $tableName . " where id = 1";

//echo "sqlAll = $sqlAll";
//echo "sqlNew = $sqlNew";

//echo "sqlInsertRecord = $sqlInsertRecord";

echo "sqlNewRecord = $sqlNewRecord";

$sth = $dbh->prepare($sqlNewRecord);
$sth->execute();

// Fetch all of the remaining rows in the result set 
//print("Fetch all of the remaining rows in the result set:\n");

$result = $sth->fetchAll(PDO::FETCH_ASSOC);

print("<form action='insert.php' method=get>");

print ("<table border=1>");


$fields[]=0;

//foreach($result as $key=>$value) {
foreach($result as $value) {


  print ("key $key");
  print ("value $value");

  $i=0;

  foreach($value as $key1=>$value1) {
//  foreach($value as $value1) {

    print ("<tr>");
    print ("<td>");


    if ($key1 != "id")
    {
       print ($key1);
       //print ("value1 $value1");


       $fields[$i] = $key1;
       $i++;

       print ("</td>");
       print ("<td>");


    //print ("<input type=text name=$key1 value=''>");
       print ("<input type=text name=$key1 placeholder=$key1>");



       print ("</td>");
       print ("</tr>");

    //print ("value1 $value1");
    }
  }
}

print ("<tr>");
print ("<td>");

print ("<input type=submit value= 'insert'>"); 

print ("</td>");
print ("</tr>");

print ("</table>");

print ("</form>");   


print ("fields  $fields");

print ("i = $i");

$y=0;



print (" fields = $fields[1]");


print_r($fields);

*/

/*
foreach($fields as $value2) {
  //print ($key2);
  print ($value2);

}à

*/

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





*/

print ("</form>");


echo "<br />end</br>";
?>
