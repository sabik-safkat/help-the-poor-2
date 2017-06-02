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
  <p>Following options are only for admin!</p>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-2">
      <h3></h3>
      <a href="viewDonation.php" class="btn btn-primary btn-lg">All donations</a>
      <!-- <p>click to view and manage all the donations submitted...</p>
      <p>package of clothes and money promises are among the donations....</p> -->
    </div>
    <!-- <div class="col-sm-2">
      <h3>2</h3>
      <a href="#" class="btn btn-primary btn-lg">All donors</a>
      <p>Click to see the registered donors...</p>
      <p>These people have registered and they can submit donations any time. Your job is to collect them...</p>
    </div> -->
    <div class="col-sm-2">
      <h3></h3>
      <a href="allvolunteers.php" class="btn btn-primary btn-lg">All volunteers</a>
     <!--  <p>Click above to see the list of volunteers...</p>
      <p>Volunteers are free social workers who are willing to participate in your activities....</p> -->
    </div>

    <!-- <div class="col-sm-2">
      <h3>4</h3>
      <a href="#" class="btn btn-primary btn-lg">All locations</a>
      <p>Click to view your preffered locations...</p>
      <p>These are the locations you plan to distribute your collecctions at...</p>
    </div>
    <div class="col-sm-2">
      <h3>5</h3>
      <a href="#" class="btn btn-primary btn-lg">All requests</a>
      <p>See the requests...</p>
      <p>These are the people who has asked for your help. Contact them....</p>
    </div> -->

     <div class="col-sm-2">
      <h3></h3>
      <a href="eventop.php" class="btn btn-primary btn-lg">Events</a>
     <!--  <p>Manage the events here...</p>
      <p>You may create new events or manage the existing ones here....</p> -->
    </div>
  </div>
</div>

</body>
</html>
