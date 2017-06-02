<?php
$conn = new mysqli('localhost', 'root', '', 'help');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_GET["id"];
$sql = "SELECT * FROM event where id='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $name = $row["name"];
      $location = $row["location"];
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
      
      <ul class="nav navbar-nav">
        <li ><a href="opening.php">Home</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login_reg.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
      </ul>
    </div>
  </nav>

  <!-- navigatioin bar code ends -->

              <div class="container">
          			<div class="col-md-6 col-md-offset-3">
          			  <h2>Edit event Info</h2>

          			  <form role="form" action="eventupdate.php" method="POST">
          			    <div class="form-group">
          			      <label for="name">Event Name</label>
                      <input name="id" type="hidden" value="<?php  echo $name; ?>">
          			      <input type="text" name="name" value="<?php  echo $name; ?>" class="form-control" required>
          			    </div>

                    <div class="form-group">
                      <label for="location">Location</label>
                      <input name="id" type="hidden" value="<?php  echo $location; ?>">
                      <input type="text" name="location" value="<?php  echo $location; ?>" class="form-control" required>
                    </div>

          			    <div class="form-group">
          			      <label for="date">Date</label>
          			      <input type="text" name="date" value="<?php echo $date; ?>" class="form-control" required>
          			    </div>

          			    <!-- <div class="form-group">
          			      <label for="event_name">Event</label>
          			      <input type="text" name="event_name" value="<?php echo $event; ?>" class="form-control" required>
          			    </div>

                    <div class="form-group">
                      <label for="date">Date</label>
                      <input type="text" name="date" value="<?php echo $date; ?>" class="form-control" required>
                    </div> -->

          			    <button type="submit" class="btn btn-success pull-right">Update</button>

          			  </form>
          			</div>
          		</div>
</body>
</html>
