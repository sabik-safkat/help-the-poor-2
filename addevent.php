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

    $nameErr = $locErr = $dateErr = "";
    $name = $location = $date = "";
    $flag =2;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (empty($_POST["name"])) {
         $nameErr = "Name is required";
         $flag = 1; // flag is used to check if error or ok
       } else {
         $name = test_input($_POST["name"]);
         }
       }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (empty($_POST["location"])) {
         $locErr = "address is required";
         $flag = 1; // flag is used to check if error or ok
       } else {
         $location = test_input($_POST["location"]);
         }
       }



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (empty($_POST["date"])) {
         $dateErr = "date is required";
         $flag = 1; // flag is used to check if error or ok
       } else {
         $date = test_input($_POST["date"]);
     }
   }

      
       //--  PHP validation code ends here

      // Insert data to database if there is no error
       // if ($flag != 1) {

       //   $sql2 = "INSERT INTO event (name, location, date)
       //   VALUES ('$name', '$location', '$date')";

       //   if ($conn->query($sql2) == TRUE) {
      
       //         //header("Location: index.php");
       //       }  else {
       //             //echo "Error: " . $sql . "<br>" . $conn->error;
       //             $message = "Something went wrong.  sql  error";
       //             //header('Location: index.php?meg='.$message);
       //      }

       //     $conn->close();
           
       //     // mkdir("$name");
       //     // if (!mkdir($name, 0777, true)) {
       //     //          die('Failed to create folders...');
       //     //        }
       //     if(!file_exists($name) && !is_dir($name)){
          
       //        mkdir("$name");
       //      }
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
        <h2>ADD event Info</h2>

        <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name"  class="form-control" >
            <span class="error">* <?php echo $nameErr?></span>

          </div>

          <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" placeholder="last name"  class="form-control" >
            <span class="error">* <?php echo $locErr?></span>
          </div>

          <div class="form-group">
            <label for="date">Date</label>
            <input type="text" name="date" placeholder="Registration" class="form-control">
            <span class="error">* <?php echo $dateErr?></span>
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

         $sql2 = "INSERT INTO event (name, location, date)
         VALUES ('$name', '$location', '$date')";

         if ($conn->query($sql2) == TRUE) {
      
               //header("Location: index.php");
             }  else {
                   //echo "Error: " . $sql . "<br>" . $conn->error;
                   $message = "Something went wrong.  sql  error";
                   //header('Location: index.php?meg='.$message);
            }

           $conn->close();
           
           // mkdir("$name");
           // if (!mkdir($name, 0777, true)) {
           //          die('Failed to create folders...');
           //        }
           if(!file_exists($name) && !is_dir($name)){
          
              mkdir("$name");
            }
       } else {
        // echo "something went wrong";
       }
     }
?>