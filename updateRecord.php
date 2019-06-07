<?php
echo "begin<br>";

include_once("connect.php");



try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}



//echo "dbh = $dbh";

print ("<h1> update record </h1>");


print ("<form action = 'update.php' method=get>");

print ("<table border=1>");

//$sth = $dbh->prepare("SHOW COLUMNS FROM student");

$id = $_GET['id'];

//echo "id $id";

//echo "sql = $sql";

$sqlUpdate = $sqlUpdate . $id;
echo "sqlUpdate = $sqlUpdate";

//$sth = $dbh->prepare("select * FROM student where id = $id ");
$sth = $dbh->prepare($sqlUpdate);
$sth->execute();

$result = $sth->fetch(PDO::FETCH_ASSOC);
//while ($result)
//{


print ("<table border=1>");


foreach($result as $key=>$value) {
  
  print ("<tr>");

  //print("PDO::FETCH_ASSOC: ");

  //print ("<td>");    
    
  //echo "key $key";
  if ($key == 'id') 
    print ("<input type=hidden name='id' value = $value>");
    //}
  else 
  {
    print ("<td>"); 
    print ($key);
 
    print ("</td>");

    print ("<td>"); 
 
    print ("<input type=text name = $key value = $value>");

    print ("</td>");
  
  

  }

print ("</tr>");

print ("</form>");
  

}

print ("<tr>");
print ("<td>"); 

print ("<input type=submit value = 'update'");

print ("</td>");

print ("</tr>");



print ("</table>");

print ("</form>");


print ("<form action = 'delete.php' method=get>");


print ("<input type=hidden name='id' value=$id>");

print ("<input type=submit value = 'delete'>");

print ("</form>");


echo "<br />end";
?>
