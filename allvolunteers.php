<?php
// $conn = new mysqli('localhost', 'root', '', 'help');
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

$dbhost = 'localhost';
     $dbuser = 'root';
     $dbpass = '';
     $rec_limit = 5;
     $conn = mysql_connect($dbhost, $dbuser, $dbpass);

     if(!$conn ) {
        die('Could not connect: ' . mysql_error());
     }
     mysql_select_db('help');

 $sql = "SELECT count(id) FROM volunteers";
     $retval = mysql_query( $sql, $conn );

     if(!$retval ) {
        die('Could not get data: ' . mysql_error());
     }
     $row = mysql_fetch_array($retval, MYSQL_NUM );
    $rec_count = $row[0];

     if(isset($_GET['page'] ) ) {
                $page = $_GET['page'];
        $offset = $rec_limit * ($page - 1);
     }else {
        $page = 1;
        $offset = 0;
     }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Home || Simple CRUD with PHP</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sabik Safkat">
    <meta name"description" content="Simple CRUD with PHP">
    <meta name="keywords" content="HTML, CSS, Bootstrap, JSP, Sabik , Basic CRUD">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

<?php
// $sql = "SELECT *FROM volunteers";
// $result = $conn->query($sql);

// echo $rec_count;
$total_page = ceil($rec_count/$rec_limit);
$sql = "SELECT *FROM volunteers LIMIT $offset, $rec_limit";
// $sql = "SELECT *FROM event";
// $result = $conn->query($sql);
$retval = mysql_query( $sql, $conn );
// $result = $conn->query($sql);
 if(! $retval ) {
        die('Could not get data2: ' . mysql_error());
     }



?>

<!-- code for navigation bar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- <a class="navbar-brand" href="index.php">studenInfo</a> -->
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="opening.php">Home</a></li>
      <!-- <li ><a href="add.php">ADD NEW Student</a></li> -->
    </ul>
  </div>
</nav>

<!-- navigatioin bar code ends -->





  <div class="container">
    <h2>Volunteers Info Display</h2>
    <p>Every volunteers from database are displyed here.</p>
<!-- right side add buttton commented     <a href="add.php"><button type="submit" class="btn btn-success pull-right">Add New</button></a>
-->
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>first_name</th>
          <th>last_name</th>
          <th>reg_no</th>
          <th>password</th>
          <th>location</th>
          <th>Event</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>

<?php
        // if ($result->num_rows > 0) {
            // output data of each row
 while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
            // while($row = $result->fetch_assoc()) {


                echo  '<tr class="success">
                      <td>'.$row["id"].'</td>
                      <td>'.$row["first_name"] .'</td>
                      <td>'.$row["last_name"] .'</td>
                      <td>'.$row["reg_no"] .'</td>
                      <td>'.$row["password"] .'</td>
                      <td>'.$row["location"] .'</td>
                      <td>'.$row["event"] .'</td>
                      <td>'.$row["date"] .'</td>
                      <td><a href="edit.php?id='.$row['id'].'"><button type="button" class="btn btn-primary btn-xs">Edit</button></a></td>
                      
                      </tr>';
            }
        // } else {
        //     echo "0 results";
        // }
            // echo $rec_count;
            // echo $page;
            // echo $total_page;
         if( $page == $total_page && $page!=1) {
            $last = $page - 1;
            $page++;            
            echo "<a href = '?page=$last'>Last page</a>  |";
            // echo "<a href = '?page=$page'>Next 10 Records</a>";
         }else if( $page == 1 && $page!=$total_page ) {
             $page++;
            echo "<a href = '?page=$page'>Next page</a>  |";
         }elseif($page>1 && $page != $total_page){
              $last = $page - 1;
              $page++;
              echo "<a href = '?page=$last'>Last page</a>  |";
              echo "<a href = '?page=$page'>Next page</a>  |";
         }elseif ($page>$total_page) {
              $page= $total_page;
         }elseif ($page==1 && $page==$total_page) {
           $page++;
         }
      // $conn->close();
?>




      </tbody>
    </table>
  </div>


</body>
</html>
