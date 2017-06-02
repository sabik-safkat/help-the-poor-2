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

    $nameErr = $name2Err = $regErr = $passErr = "";
    $firstname = $lastname = $regno = $password= "";
    $flag =2;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (empty($_POST["first_name"])) {
         $nameErr = "Name is required";
         $flag = 1; // flag is used to check if error or ok
       } else {
         $firstname = test_input($_POST["first_name"]);
         }
       }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (empty($_POST["last_name"])) {
         $name2Err = "Name is required";
         $flag = 1; // flag is used to check if error or ok
       } else {
         $lastname = test_input($_POST["last_name"]);
         }
       }



       if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (empty($_POST["reg_no"])) {
         $regErr = "Reg no: is required";
         $flag = 1; // flag is used to check if error or ok
       } else {
         $regno = test_input($_POST["reg_no"]);
       // check if registration number is well-formed

       if (!is_numeric($regno)) {
         $regErr = "Only integer number allowed";
         $flag = 1;
       }
     }
   }
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (empty($_POST["password"])) {
         $passErr = "password is required";
         $flag = 1;
       }else{
        $password= test_input($_POST["password"]);
       }
     }

      
       //--  PHP validation code ends here

      // Insert data to database if there is no error
       // if ($flag != 1) {

       //   $sql2 = "INSERT INTO volunteers (first_name, last_name, reg_no, password)
       //   VALUES ('$firstname', '$lastname', '$regno', '$password')";

       //   if ($conn->query($sql2) == TRUE) {
       //          //echo "Data added Succesfully";
       //         //header("Location: index.php");
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
        <h2>ADD volunteer Info</h2>

        <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
          <div class="form-group">
            <label for="first_name">first name</label>
            <input type="text" name="first_name" placeholder="First Name"  class="form-control" >
            <span class="error">* <?php echo $nameErr?></span>

          </div>

          <div class="form-group">
            <label for="last_name">Last name</label>
            <input type="text" name="last_name" placeholder="last name"  class="form-control" >
            <span class="error">* <?php echo $name2Err?></span>
          </div>

          <div class="form-group">
            <label for="reg_no">Registration no</label>
            <input type="text" name="reg_no" placeholder="Registration" class="form-control">
            <span class="error">* <?php echo $regErr?></span>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" placeholder="password" class="form-control">
            <span class="error">* <?php echo $passErr?></span>
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

         $sql2 = "INSERT INTO volunteers (first_name, last_name, reg_no, password)
         VALUES ('$firstname', '$lastname', '$regno', '$password')";

         if ($conn->query($sql2) == TRUE) {
                //echo "Data added Succesfully";
               header("Location: signingVol.php");
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