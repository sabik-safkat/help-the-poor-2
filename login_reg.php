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
        <li><a href="login_reg.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
    <div class="col-sm-2">
      <h3></h3>
      <a href="signingDon.php" class="btn btn-primary btn-lg">Log in as Donor</a>
      <!-- <p>click to view and manage all the donations submitted...</p>
      <p>package of clothes and money promises are among the donations....</p> -->
    </div>
    <div class="col-sm-2">
      <h3></h3>
      <a href="addDonor.php" class="btn btn-primary btn-lg">Register as Donor</a>
      <!-- <p>Click to see the registered donors...</p>
      <p>These people have registered and they can submit donations any time. Your job is to collect them...</p> -->
    </div>
    <div class="col-sm-2">
      <h3></h3>
      <a href="signingVol.php" class="btn btn-primary btn-lg">Login as volunteer</a>
     <!--  <p>Click above to see the list of volunteers...</p>
      <p>Volunteers are free social workers who are willing to participate in your activities....</p> -->
    </div>

    <div class="col-sm-2">
      <h3></h3>
      <a href="AddVolunteer.php" class="btn btn-primary btn-lg">Signup as volunteer</a>
     <!--  <p>Click to view your preffered locations...</p>
      <p>These are the locations you plan to distribute your collecctions at...</p> -->
    </div>
    <div class="col-sm-2">
      <h3></h3>
      <a href="signin.php" class="btn btn-primary btn-lg">Admin panel</a>
      <!-- <p>See the requests...</p>
      <p>These are the people who has asked for your help. Contact them....</p> -->
    </div>
  </div>
</div>

</body>
</html>
