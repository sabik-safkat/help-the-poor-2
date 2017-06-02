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
            
            $id = $_POST['vol_id'];
            $location = $_POST['vol_location'];
            
            $sql =  "UPDATE volunteers SET location = '" . mysql_real_escape_string($location) . "' WHERE id = '$id'";
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
                        <td width = "100">VOLUNTEER ID</td>
                        <td><input name = "vol_id" type = "text" 
                           id = "vol_id"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">VOLUNTEER LOCATION</td>
                        <td><input name = "vol_location" type = "text" 
                           id = "vol_location"></td>
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

$sql= "SELECT id, first_name, last_name, reg_no, location FROM volunteers";

if($stmt= $mysqli->prepare($sql))
{
   $stmt->execute();
   $stmt->bind_result($id, $fname, $lname, $reg, $location);

   while ($stmt->fetch())
   {
      echo "$id $fname $lname $reg $location <br/>";
   }
   $stmt->close();
}else{
   echo "statement error:".$mysqli->error;
}

$mysqli->close();
?>