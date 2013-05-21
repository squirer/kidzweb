<?php
$con=mysqli_connect("localhost","root","","ebusiness2");


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  else
  {
	echo "data base is connected  ";
  }


mysqli_close($con);
?> 