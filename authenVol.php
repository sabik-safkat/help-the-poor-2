
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
$_SESSION["first_name"]=$_POST["first_name"];
$_SESSION["password"]=$_POST["password"];
$result = mysql_query("SELECT * FROM volunteers WHERE first_name='" . $_POST["first_name"] . "' and password = '". $_POST["password"]."'");
if($result === false) {
    var_dump(mysql_error());
}else{
$count  = mysql_num_rows($result);
if($count==0) {
	echo "Invalid Username or Password!";
} else {
    header("Location: volProfile.php"); 
    exit;
}
}
}
?>


