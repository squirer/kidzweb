<?php
//include ConnectDB.php;
$con=mysqli_connect("localhost","root","","ebusiness2");

$sql="INSERT INTO product (id,name,type,year)
VALUES
('','ak47','assault','1904')";

//('$_POST[id]','$_POST[fileName]','$_POST[filePath]','$_POST[uploadedBy]','today','$_POST[rating]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ');  // . mysqli_error());
  }
//echo "1 record added :  id =" . "  $_POST[id]"  . "  filename =  " .  "$_POST[fileName]";
echo "1 record added to table!";
?>