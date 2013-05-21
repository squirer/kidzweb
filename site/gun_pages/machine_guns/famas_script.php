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

if (!mysqli_query($con,"UPDATE stock SET quantity=quantity-1
WHERE id=7"))
  {
  die('Error: ');  // . mysqli_error());
  }
  
echo "you have successfully purchased your weapon! you will now be redirected!";
mysqli_close($con);
//sleep(3);

header("Refresh: 3; URL=../../index.html");
exit;
?> 