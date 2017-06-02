<!DOCTYPE html>
<html>
<head>
  <title>Add || Simple CRUD with PHP</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Maisur Rahman Siddiki">
    <meta name"description" content="Simple CRUD with PHP">
    <meta name="keywords" content="HTML, CSS, Bootstrap, JSP, Masiur , Basic CRUD">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <style>
         .error {color: #FF0000;}
    </style>
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
        <!-- <li class="active"><a href="add.php">ADD NEW Student</a></li> -->
      </ul>
       <ul class="nav navbar-nav navbar-right">
        <li><a href="login_reg.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
      </ul>
    </div>
  </nav>

<!-- navigatioin bar code ends -->

<?php
$conn = new mysqli('localhost', 'root', '', 'help');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    // define variables and set to empty values

    $idErr = $addressErr = $clothesErr = $takaErr = $collectionErr= "";
    $donid = $clothes = $address = $taka= $time= "";
    $flag =2;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (empty($_POST["donor_id"])) {
         $idErr = "Name is required";
         $flag = 1; // flag is used to check if error or ok
       } else {
         $donid = test_input($_POST["donor_id"]);
         }
       }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (empty($_POST["address"])) {
         $addressErr = "Name is required";
         $flag = 1; // flag is used to check if error or ok
       } else {
         $address = test_input($_POST["address"]);
         }
       }



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (empty($_POST["clothes"])) {
         $clothesErr = "address: is required";
         $flag = 1; // flag is used to check if error or ok
       } else {
         $clothes = test_input($_POST["clothes"]);
     }
   }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (empty($_POST["taka"])) {
         $takaErr = "password is required";
         $flag = 1;
       }else{
        $taka= test_input($_POST["taka"]);
       }
     }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (empty($_POST["collection_time"])) {
         $collectionErr = "password is required";
         $flag = 1;
       }else{
        $time= test_input($_POST["collection_time"]);
       }
     }

      
       //--  PHP validation code ends here

      // Insert data to database if there is no error
       // if ($flag != 1) {

       //   $sql2 = "INSERT INTO donations (donor_id, clothes, address, taka, collection_time)
       //   VALUES ('$donid', '$clothes', '$address', '$taka', '$time')";

       //   if ($conn->query($sql2) == TRUE) {
       //          //echo "Data added Succesfully";
       //       }  else {
       //             //echo "Error: " . $sql . "<br>" . $conn->error;
       //             $message = "Something went wrong.  sql  error";
       //             //header('Location: index.php?meg='.$message);
       //      }

       //     $conn->close();
       // } else {
       //  // echo "something went wrong";
       // }




    function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }


?>

<!-- html form code goes here -->

    <div class="container">
      <div class="col-md-6 col-md-offset-3">
        <h2>ADD donation Info</h2>

        <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
          <div class="form-group">
            <label for="donor_id">Donor id</label>
            <input type="text" name="donor_id" placeholder="First Name"  class="form-control" >
            <span class="error">* <?php echo $idErr?></span>

          </div>

          <div class="form-group">
            <label for="address">address</label>
            <input type="text" name="address" placeholder="last name"  class="form-control" >
            <span class="error">* <?php echo $addressErr?></span>
          </div>

          <div class="form-group">
            <label for="clothes">clothes</label>
            <input type="text" name="clothes" placeholder="Registration" class="form-control">
            <span class="error">* <?php echo $clothesErr?></span>
          </div>

          <div class="form-group">
            <label for="taka">taka</label>
            <input type="text" name="taka" placeholder="password" class="form-control">
            <span class="error">* <?php echo $takaErr?></span>
          </div>

          <div class="form-group">
            <label for="collection_time">collection time</label>
            <input type="text" name="collection_time" placeholder="password" class="form-control">
            <span class="error">* <?php echo $collectionErr?></span>
          </div>

          <button type="submit" name="submit-form" class="btn btn-primary pull-right">ADD</button>

        </form>
      </div>
    </div>

<!-- html form code ends here -->


</body>
</html>

<?php

if (isset($_POST['submit-form'])){
 if ($flag != 1) {

         $sql2 = "INSERT INTO donations (donor_id, clothes, address, taka, collection_time)
         VALUES ('$donid', '$clothes', '$address', '$taka', '$time')";

         if ($conn->query($sql2) == TRUE) {
                //echo "Data added Succesfully";
             }  else {
                   //echo "Error: " . $sql . "<br>" . $conn->error;
                   $message = "Something went wrong.  sql  error";
                   //header('Location: index.php?meg='.$message);
            }

           $conn->close();
       } else {
        // echo "something went wrong";
       }
     }

       ?>
