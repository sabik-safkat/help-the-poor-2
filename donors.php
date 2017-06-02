 

<?php
session_start();



$mysqli= new mysqli('localhost', 'root', '', 'help');
$username=$_SESSION['id'];
$password=$_SESSION['password'];

$clean_username = strip_tags(stripslashes(mysql_real_escape_string($username)));
$clean_password = sha1(strip_tags(stripslashes(mysql_real_escape_string($password))));

$sql="SELECT first_name FROM donors WHERE donor_id='$clean_username' and password='$clean_password'";


if($stmt= $mysqli->prepare($sql))
{
	$stmt->execute();
	$stmt->bind_result($first_name);

	while ($stmt->fetch())
	{
		echo "$first_name <br/>";
	}
	$stmt->close();
}else{
	echo "statement error:".$mysqli->error;
}
// echo "fuck";

// echo '<br/> please edit your account if not done yet';




$mysqli->close();
?>
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
  <h1>CHOOSE YOUR ACTION</h1>
  <p>Thank you for being part of our programme!</p>
</div>
  
<div class="container">
  <div class="row">
   <!--  <div class="col-sm-3">
      <h3>1</h3>
      <a href="updateDon.php" class="btn btn-primary btn-lg">Update profile</a>
      <p>click to view and manage all the donations submitted...</p>
      <p>package of clothes and money promises are among the donations....</p>
    </div> -->
    <div class="col-sm-3">
      <h3></h3>
      <a href="makedon.php" class="btn btn-primary btn-lg">Make donation</a>
     <!--  <p>Click to see the registered donors...</p>
      <p>These people have registered and they can submit donations any time. Your job is to collect them...</p> -->
    </div>

    <div class="col-sm-3">
      <h3></h3>
      <a href="mydonations.php" class="btn btn-primary btn-lg">View donation</a>
      <!-- <p>Click to see the registered donors...</p>
      <p>These people have registered and they can submit donations any time. Your job is to collect them...</p> -->
    </div>
  
  </div>
</div>

</body>
</html>
