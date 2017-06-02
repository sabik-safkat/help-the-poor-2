<?php
$conn = new mysqli('localhost', 'root', '', 'help');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  // define variables and set to empty values

  $stateErr = $addressErr = "";
  $state = $address = "";
  $flag = 2;


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
     if (empty($_POST["current_state"])) {
       $stateErr = "Name is required";
       $flag = 1;
     } else {
       $state = test_input($_POST["current_state"]);
       }
     }

  if (empty($_POST["receivers_address"])) {
       $addressErr = "Registration Number is required";
       $flag = 1;
     } else {
       $address = test_input($_POST["receivers_address"]);
       // check if registration number is well-formed
     }

  // if (empty($_POST["date"])) {
  //      // $cgpaErr = "OK. OK, Don't be so shy. Tell us about CGPA";
  //      // $flag = 1;
  //   }  else {
  //      $date = test_input($_POST["date"]);
  //      // check  if cgpa is in proper format
  //      // if(!is_numeric($cgpa)) {
  //      //   $cgpaErr = "CGPA must be value";
  //      //   $flag = 1;
  //      // } else {
  //      //   $cgpa = floatval($cgpa);
  //      //   $cgpa = round($cgpa, 2);
  //      //    if(($cgpa > 4) || ( $cgpa < 0)) {
  //      //    $cgpaErr = "CGPA cannot be more than 4.00 or less than 0.00";
  //      //    $flag = 1;
  //      //  }
  //      }
     


  function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }


//--  PHP validation code ends here

// Insert data to database if there is no error
  echo $id;
  if ($flag != 1) {
    $sql = "UPDATE donations SET current_state = '$state', receivers_address='$address'  WHERE id= $id";
     //$sql = "UPDATE volunteers SET location = '$location', event='$event', date ='$date' WHERE id= $id";

    if ($conn->query($sql) === TRUE) {
        echo "Your Data has been updated Succesfully";
       header('Location: viewDonation.php');
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        $message = "Something went wrong . query failed";
        echo $message;
        //header('Location: index.php?meg='.$message);
    }
    $conn->close();
  } else {
    echo "Something went wrong";
  }

?>
