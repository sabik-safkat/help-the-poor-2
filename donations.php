<html>
   
   <head>
      <title>Update a Record in MySQL Database</title>
   </head>
   
   <body>
      <?php
         if(isset($_POST['update'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            $id = $_POST['id'];
            $current_state = $_POST['current_state'];
            
            $sql =  "UPDATE donations SET current_state = '" . mysql_real_escape_string($current_state) . "' WHERE id = '$id'";
            mysql_select_db('help');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
            mysql_close($conn);
         }else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">Donations ID</td>
                        <td><input name = "id" type = "text" 
                           id = "id"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Current state</td>
                        <td><input name = "current_state" type = "text" 
                           id = "current_state"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit" 
                              id = "update" value = "Update">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            <?php
         }
      ?>
      
   </body>
</html>



<?php

$mysqli= new mysqli('localhost', 'root', '', 'help');

$sql= "SELECT first_name, last_name, address, donation_amount, clothes FROM donors";

if($stmt= $mysqli->prepare($sql))
{
	$stmt->execute();
	$stmt->bind_result($fname, $lname, $addrs, $money, $clothes);

	while ($stmt->fetch())
	{
		echo "$fname $lname $addrs $money $clothes  <br/>";
	}
	$stmt->close();
}else{
	echo "statement error:".$mysqli->error;
}

$mysqli->close();
?>