<?php
$conn = new mysqli('localhost', 'root', '', 'help');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_GET["id"];
$sql = "SELECT * FROM volunteers where id='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $id = $row["id"];
      $fname = $row["first_name"];
      $lname = $row["last_name"];
      $location = $row["location"];
      $event = $row["event"];
      $date = $row["date"];

    }
  } else {
    echo "0 results";
  }
  $conn->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update || Simple CRUD with PHP</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="author" content="sabik safkat">
  	<meta name"description" content="Simple CRUD with PHP">
  	<meta name="keywords" content="HTML, CSS, Bootstrap, JSP, Masiur , Basic CRUD">
  	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<script src="js/bootstrap.min.js"></script>
</head>
<body>
  <!-- code for navigation bar -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">studenInfo</a>
      </div>
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Home</a></li>
        <li ><a href="add.php">ADD NEW Student</a></li>
      </ul>
    </div>
  </nav>

  <!-- navigatioin bar code ends -->

              <div class="container">
          			<div class="col-md-6 col-md-offset-3">
          			  <h2>Edit Student Info</h2>

          			  <form role="form" action="updateVol.php" method="POST">

                     <div class="form-group">
                      <label for="id">Id</label>
                      <input name="id" type="hidden" value="<?php  echo $id; ?>">
                      <input type="text" name="id" value="<?php  echo $id; ?>" class="form-control" required>
                    </div>
          			    <div class="form-group">
          			      <label for="first_name">First Name</label>
                      <input name="first_name" type="hidden" value="<?php  echo $fname; ?>">
          			      <input type="text" name="first_name" value="<?php  echo $fname; ?>" class="form-control" required>
          			    </div>

                    <div class="form-group">
                      <label for="last_name">Last Name</label>
                      <input name="last_name" type="hidden" value="<?php  echo $lname; ?>">
                      <input type="text" name="last_name" value="<?php  echo $lname; ?>" class="form-control" required>
                    </div>

          			    <div class="form-group">
          			      <label for="location">Location</label>
          			      <input type="text" name="location" value="<?php echo $location; ?>" class="form-control" required>
          			    </div>

          			    <div class="form-group">
          			      <label for="event">Event</label>
          			      <input type="text" name="event" value="<?php echo $event; ?>" class="form-control" required>
          			    </div>

                    <div class="form-group">
                      <label for="date">Date</label>
                      <input type="text" name="date" value="<?php echo $date; ?>" class="form-control" required>
                    </div>

          			    <button type="submit" class="btn btn-success pull-right">Update</button>

          			  </form>
          			</div>
          		</div>
</body>
</html>
