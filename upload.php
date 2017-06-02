
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
  <!-- <h1>CHOOSE YOUR ACTION</h1> -->
</div>
  
<div class="container">
  <div class="row">
    
  </div>
</div>

 <div class="col-sm-4 sidenav">
      <p><a href="#">link</a></p>
      <p><a href="#">link</a></p>
      <p><a href="#">link</a></p>
      <p><a href="#">link</a></p>
      <p><a href="#">link</a></p>
      <p><a href="#">link</a></p>
    </div>

</body>
</html>



<?php
include( 'function.php');
// settings



$max_file_size = 8000000; // 200kb
$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
// thumbnail sizes
$sizes = array(200 => 200);

if ($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_FILES['image'])) {
  if( $_FILES['image']['size'] < $max_file_size ){
    // get file extension
    $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
    if (in_array($ext, $valid_exts)) {
      /* resize image */
      foreach ($sizes as $w => $h) {
        $files[] = resize($w, $h);
      }

    } else {
      $msg = 'Unsupported file';
    }
  } else{
    $msg = 'Please upload image smaller than 8MB';
  }
}
?>

<html>
   <body>

      <form action = "" method = "POST" enctype = "multipart/form-data">
      
         <input type = "file" name = "image" class="btn btn-primary btn-lg"/> 
         <input type = "submit" class="btn btn-primary btn-lg"/>

      
      </form>

       
      <a href="uploadPhoto.php" class="btn btn-primary btn-lg">Done</a>
     
      
      
   </body>
</html>
