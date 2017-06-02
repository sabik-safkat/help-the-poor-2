<html>
<body>
	<h1>ACCESS DENIED!!!</h1>
<?php
//$message="";
if(count($_POST)>0) {
$conn = mysql_connect("localhost","root","");
mysql_select_db("help",$conn);
$result = mysql_query("SELECT * FROM admin WHERE name='" . $_POST["name"] . "' and password = '". $_POST["password"]."'");
$count  = mysql_num_rows($result);
if($count==0) {
	echo "Invalid Username or Password!";
} else {
    header("Location: admin.php"); 
    exit;
}
}
?>


