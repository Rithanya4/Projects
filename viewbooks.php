<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="css.css">
<link rel="stylesheet" href="minipro.css">
</head>
<body style="background-color: #33ffcc">
<h3 class="but"> Books </h3> 
</body>
</html>
		<?php		
                       $conn = mysqli_connect("localhost", "root", "", "registration");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
$user="";
if(isset($_COOKIE["username"])) 
$user=$_COOKIE["username"];
		$sql = "select * from wishlist ";
	echo"<table border='2' align='center' cellpadding='3' cellspacing='3' width='70%' >
<tr><th>Book name</th>";	

if($result = $conn->query($sql)){


  while($row = $result->fetch_assoc()) {
    $bookname=$row['Bookname'];
echo'<tr>';
echo'<b><td>'.$bookname.'<b> <br>';
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
