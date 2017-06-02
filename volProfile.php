<?php

// require 'Carbon.php';
// use Carbon\Carbon;
session_start();
if(!isset($_SESSION['first_name']) ){
  header('location:login_reg.php');
} else {
  //echo "<center> Welcome ". $_SESSION['myusername'] . "</center>" ;
}

$conn = new mysqli('localhost', 'root', '', 'help');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $_SESSION['first_name']=$_POST['first_name'];
// $_SESSION['password']=$_POST['password'];
$username=$_SESSION['first_name'];
$password=$_SESSION['password'];



// $clean_username = strip_tags(stripslashes(mysql_real_escape_string($username)));
// $clean_password = sha1(strip_tags(stripslashes(mysql_real_escape_string($password))));




$sql="SELECT id, first_name, event, location, date FROM volunteers WHERE first_name='".$username."' and password='".$password."'";

// $sql = "SELECT id, first_name, , event, location, date FROM volunteers WHERE id= '". $_SESSION["id"]."'";

$result = $conn->query($sql);



?>

<!DOCTYPE html>
<html>
<head>
  <title>Home || Simple CRUD with PHP</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Maisur Rahman Siddiki">
    <meta name"description" content="Simple CRUD with PHP">
    <meta name="keywords" content="HTML, CSS, Bootstrap, JSP, Sabik , Basic CRUD">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>

</head>
<body>

<!-- code for navigation bar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- <a class="navbar-brand" href="index.php">studenInfo</a> -->
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="opening.php">Home</a></li>
      <!-- <li ><a href="add.php">ADD NEW Student</a></li> -->
    </ul>
     <ul class="nav navbar-nav navbar-right">
        <li><a href="login_reg.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
      </ul>
  </div>
</nav>

<!-- navigatioin bar code ends -->


<div class="col-sm-2">
      <a href="uploadPhoto.php" class="btn btn-primary btn-lg">Upload photos</a>
    </div>


  <div class="container">
    <h2>Volunteers Info Display</h2>
    <!-- <p>Every  from your account are displyed here.</p> -->
<!-- right side add buttton commented     <a href="add.php"><button type="submit" class="btn btn-success pull-right">Add New</button></a>
-->
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>first name</th>
          <th>event</th>
          <th>location</th>
          <th>date</th>
          <!-- <th>Action</th>
          <th>Action</th>
          <th>Action</th> -->
        </tr>
      </thead>
      <tbody>

<?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {


                echo  '<tr class="success">
                      <td>'.$row["id"] .'</td>
                      <td>'.$row["first_name"] .'</td>
                      <td>'.$row["event"] .'</td>
                      <td>'.$row["location"] .'</td>
                      <td>'.$row["date"] .'</td>
                     
                      </tr>';
            }
        } else {
            echo "0 results";
        }
      $conn->close();
?>




      </tbody>
    </table>
  </div>


</body>
</html>
