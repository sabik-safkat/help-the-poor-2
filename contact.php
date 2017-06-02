<!DOCTYPE html>
<html lang="en">
<head>
  <title>contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <li><a href="opening.php">Home</a></li>
        <!-- <li><a href="#">About</a></li>  -->
        
        <li><a href="guestView.php">Events</a></li>
        <!-- <li><a href="image.php">Photogalary</a></li>  -->
        <li class="active"><a href="contact.php">Contact</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <!-- <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p> -->
    </div>
    <div class="col-sm-8 text-left">
      <h2></h2>
      <p>
        <br>Shahjalal University of Science and Technology
        <br>Kumargaon, Sylhet-3114, Bangladesh
        <br>Mobile : 01521236005, 01730295466
        <br>Phone : PABX : 880-821-713491, 714479, 713850, 717850, 716123, 715393
        <br>FAX : 880-821-715257, 725050
        <br>Website : www.sust.edu
        <br>E-mail : system.admin@sust.edu
      </p>
      <hr>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p></p>
      </div>
      <div class="well">
        <p></p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>The activities of this organization are carried out by students of SHAHJALAL UNIVERSITY OF SCIENCE AND TECHNOLOGY</p>
</footer>

</body>
</html>

