
<?php
session_start();
?>

<html>
<body>
	<h1>ACCESS DENIED!!!</h1>
<?php
//$message="";
if(count($_POST)>0) {
$conn = mysql_connect("localhost","root","");
mysql_select_db("help",$conn);
$_SESSION["id"]=$_POST["donor_id"];
$_SESSION["password"]=$_POST["password"];
$result = mysql_query("SELECT * FROM donors WHERE donor_id='" . $_POST["donor_id"] . "' and password = '". $_POST["password"]."'");
$count  = mysql_num_rows($result);
if($count==0) {
	echo "Invalid id or Password!";
} else {
    header("Location: donors.php"); 
    exit;
}
}
?>


