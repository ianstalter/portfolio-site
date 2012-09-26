<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>backend</title>
</head>


<?php
    $handle = opendir(dirname(realpath(__FILE__)).'/upload/');
    while($file = readdir($handle)){
    if($file !== '.' && $file !== '..'){
    echo '<img src="upload/'.$file.'" border="1" />';
    }
    }
	?>
    
REMOVE USERS:
          <form action="delete.php" method="post">
Firstname: <input type="text" name="firstname" /></br>
Lastname: <input type="text" name="lastname" /></br>
          <input type="submit" />
          </form>
          
ADD USERS:
          <form action="insert1.php" method="post">
Firstname: <input type="text" name="firstname" /></br>
Lastname: <input type="text" name="lastname" /></br>
<input type="submit" />

</form>

<?php
 
$con = mysql_connect("50.63.106.63","devthreeblokes","Cloetcloet1");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("devthreeblokes", $con);

$result = mysql_query("SELECT * FROM Persons");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?> 
<body>
</body>
</html>