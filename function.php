<?php

function resize($width, $height){
  /* Get original image x y*/
  $conn = new mysqli('localhost', 'root', '', 'help');
// Check connection
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }

   $id = $_GET["id"];
   $sql = "SELECT name FROM event where id='$id'";
   $result = $conn->query($sql);
   if ($result->num_rows > 0){
       while($row = $result->fetch_assoc()){
         $name = $row["name"];
       }
   }

  list($w, $h) = getimagesize($_FILES['image']['tmp_name']);
  /* calculate new image size with ratio */
  $ratio = max($width/$w, $height/$h);
  $h = ceil($height / $ratio);
  $x = ($w - $width / $ratio) / 2;
  $w = ceil($width / $ratio);
  /* new file name */
  $path = "$name/".$width.'x'.$height.'_'.$_FILES['image']['name'];
  /* read binary data from image file */
  $imgString = file_get_contents($_FILES['image']['tmp_name']);
  /* create image from string */
  $image = imagecreatefromstring($imgString);
  $tmp = imagecreatetruecolor($width, $height);
  imagecopyresampled($tmp, $image,
    0, 0,
    $x, 0,
    $width, $height,
    $w, $h);
  /* Save image */
  switch ($_FILES['image']['type']) {
    case 'image/jpeg':
      imagejpeg($tmp, $path, 100);
      break;
    case 'image/png':
      imagepng($tmp, $path, 0);
      break;
    case 'image/gif':
      imagegif($tmp, $path);
      break;
    default:
      exit;
      break;
  }
  return $path;
  /* cleanup memory */
  imagedestroy($image);
  imagedestroy($tmp);
}

?>