<?php
$conn = new mysqli('localhost', 'root', '', 'help');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_GET["id"];
$sql = "SELECT * FROM donations where id='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $id = $row["id"];
      $address = $row["address"];
      $time = $row["collection_time"];
      $state = $row["current_state"];
      $receiveradd = $row["receivers_address"];

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
        <!-- <a class="navbar-brand" href="index.php">studenInfo</a> -->
      </div>
      <ul class="nav navbar-nav">
        <li ><a href="opening.php">Home</a></li>
        <!-- <li ><a href="add.php">ADD NEW Student</a></li> -->
      </ul>
    </div>
  </nav>

  <!-- navigatioin bar code ends -->

              <div class="container">
                <div class="col-md-6 col-md-offset-3">
                  <h2>Edit donations Info</h2>

                  <form role="form" action="updateDon.php" method="POST">
                    <div class="form-group">
                      <label for="id">Id</label>
                      <input name="id" type="hidden" value="<?php  echo $id; ?>">
                      <input type="text" name="id" value="<?php  echo $id; ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label for="address">Address</label>
                      <input name="address" type="hidden" value="<?php  echo $address; ?>">
                      <input type="text" name="address" value="<?php  echo $address; ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label for="collection_time">Collection time</label>
                      <input type="text" name="collection_time" value="<?php echo $time; ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label for="current_state">Current state</label>
                      <input type="text" name="current_state" value="<?php echo $state; ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label for="receivers_address">Receivers address</label>
                      <input type="text" name="receivers_address" value="<?php echo $receiveradd; ?>" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-success pull-right">Update</button>

                  </form>
                </div>
              </div>
</body>
</html>
