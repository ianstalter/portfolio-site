<?php
$host="50.63.106.63"; // Host name
$username="devthreeblokes"; // Mysql username
$password="Cloetcloet1"; // Mysql password
$db_name="devthreeblokes"; // Database name
$tbl_name="test"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or
die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and
password='$mypassword'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count==1){
	$_SESSION['myusername'] = $myusername;
		$_SESSION['mypassword'] = $mypassword;

header("location:backend.php");
}
else {
echo "Wrong Username or Password";
}
?>