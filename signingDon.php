
<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Donor Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    
<div class="container">

  <div class="well well-lg">
    <h2 style="text-align:center">Log in System</h2>
    <h4 style="text-align:center">donor login</h4>

  </div> 
<h4 style="text-align:center">Please, provide Donor id & password</h4>
<br><br>
<div class="col-md-6 col-md-offset-3">
<form class="form-horizontal" action="authenDon.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="donor_id">Donor Id:</label>
    <div class="col-sm-8">
      <input type="text" name="donor_id" class="form-control" placeholder="Enter id" required>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="password">Password: </label>
    <div class="col-sm-8">
      <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
    </div>
  </div>

  <div class="form-group"> 
        <div class="col-sm-offset-2 col-xs-4">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
     </div>

</form>

</div>
</div>


</body>
</html>