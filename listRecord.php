<?php
echo "begin<br>";


include_once("connect.php");

print ("<h1> list record </h1>");





print ("<form action = 'newRecord.php' method=get>");

print ("<input type = submit  value = 'new record'>");

print ("</form>"); 




try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


echo "sql = $sql";

//$sth = $dbh->prepare("SHOW COLUMNS FROM student");
//$sth = $dbh->prepare("select id, firstName, lastName FROM student");
$sth = $dbh->prepare($sql);

$sth->execute();

//while ($result)
//{



print ("<table border=1>");

$result = $sth->fetch(PDO::FETCH_ASSOC);
while ($result)
{

  //print_r($result);
  print ("<tr>");
  print ("<form action='updateRecord.php' method=get>");
  foreach($result as $key=>$value) {
  
    //print ("<tr>");

  //print("PDO::FETCH_ASSOC: ");

    //print ("<td>");    
    
    //echo "key $key";
    if ($key == 'id') 
      print ("<input type=hidden name='id' value = $value>");
    //}
    else {
    //print ($key);
 
    //print ("</td>");

    print ("<td>"); 

    print ($value);

    print ("</td>");
    }


    // do stuff
  }

  $result = $sth->fetch(PDO::FETCH_ASSOC);

  print ("<td>"); 

  print ("<input type=submit value='update'>");

  print ("</td>");

  print ("</form>");

  print ("</tr>"); 
}



print ("</table>");

print ("</form>");

echo "<br> ende";




