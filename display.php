<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 2;
      border-radius: 2;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 50px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: black;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 35px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">Logo</a> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="opening.php">Home</a></li>
        <!-- <li><a href="#">About</a></li> -->
        <li><a href="guestView.php">Events</a></li>
        <!-- <li><a href="#">Contact</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login_reg.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
      </ul>
    </div>
  </div>
</nav>



<div class="jumbotron text-center">
  <h1>Welcome to events photo gallery</h1>
</div>

<?php
$conn = new mysqli('localhost', 'root', '', 'help');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_GET["id"];
$sql = "SELECT name FROM event where id='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $name = $row["name"];
    }
    // echo $name;
  } else {
    echo "0 results";
  }
  $conn->close();

 // $dir = $name;
$file_display = array(
    'jpg',
    'jpeg',
    'png',
    'gif'
);


if (file_exists($name) == false) {
    echo 'Directory \'', $name, '\' not found!';
} else {
    $dir_contents = scandir($name);

    foreach ($dir_contents as $file) {
        $file_type = strtolower(end(explode('.', $file)));

        if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {
            
            echo '<img src="', $name, '/', $file, '" alt="', $file, '"/>';
                               
      
            // echo "<a href='http://".$row['website']."' target='_blank' style='margin:10px'><img src=\"" . $PathImage .       $row['logo'] . "\" height = $FooterWidth /></a>XX;
        }
    }
}




?>