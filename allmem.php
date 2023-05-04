<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="minipro.css">
<link rel="stylesheet" href="css.css">
</head>
<body style="background-color: #33ffcc">
<h3 class="but"> MEMBERS</h3>
</body>
</html>
		<?php

                       $conn = mysqli_connect("localhost", "root", "", "registration");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
	
		$sql = "select * from user";
	echo"<table border='2' align='center' cellpadding='3' cellspacing='3' width='70%' >
<tr><th style='background-color: #00ffff'>User name</th>
<th style='background-color: #00ffff'>Email ID </th></tr>";	

if($result = $conn->query($sql)){


  while($row = $result->fetch_assoc()) {
    $name=$row['Userame'];
     $email=$row['E-mail'];
echo'<tr>';
echo'<b><td>'.$name.'<b> <br>';
echo'<b><td>'.$email.'<b> <br>';
}
echo"</table>";
}

else {
  echo "0 results";
}

$conn->close();


?>



	</center>
</body>

</html>
