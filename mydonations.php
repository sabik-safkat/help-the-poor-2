<?php

 session_start();


$conn = new mysqli('localhost', 'root', '', 'help');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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

<?php
$sql = "SELECT id, address, collection_time, current_state, receivers_address FROM donations WHERE donor_id= '". $_SESSION["id"]."'";
$result = $conn->query($sql);

?>

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





  <div class="container">
    <h2>Donation Info Display</h2>
    <p>Every donations from your account are displyed here.</p>
<!-- right side add buttton commented     <a href="add.php"><button type="submit" class="btn btn-success pull-right">Add New</button></a>
-->
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>Address</th>
          <th>collection time</th>
          <th>Current state</th>
          <th>Receivers address</th>
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
                      <td>'.$row["address"] .'</td>
                      <td>'.$row["collection_time"] .'</td>
                      <td>'.$row["current_state"] .'</td>
                      <td>'.$row["receivers_address"] .'</td>
                     
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
