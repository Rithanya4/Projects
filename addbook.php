<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
<link rel="stylesheet" href="minipro.css">
</head>

<body style="background-color: #33ffcc" >
	<center>
		<?php

if(isset($_COOKIE["username"])) 

$user= $_REQUEST["username"]; 

$errors = array();	

		$user="";
	$conn = mysqli_connect("localhost", "root", "", "registration");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
                                       
 $bookname= $_REQUEST["bookname"];
 $authorname= $_REQUEST["authorname"];
                                   
		
		$sql = "INSERT INTO addbook VALUES ('$bookname','$authorname','$user')";
		
		if(mysqli_query($conn, $sql)){
			echo "added";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>

<a href="wishlist.php"> Wishlist</a></center>
</body>

</html>
