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
	$conn = mysqli_connect("localhost", "root", "", "registration");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
                                       $user= $_REQUEST["user"]; 
                                   
		$sql=mysqli_query($conn,"SELECT * FROM user where Userame='$user'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
      if(  $_COOKIE["username"] = $row['Userame']){
        echo"<h2 class='welcome'>Username is already taken!</h2>";
    }
}
else{
		$sql = "INSERT INTO user VALUES ('$user','$email','$password')";
		
		if(mysqli_query($conn, $sql)){
			
                    echo"<h3 class='welcome'>Signed up successfully </h3><br><br><br>";
	
               echo"<a href='page2.php' class='des' style='text-decoration: none;color: black'>Main page</a><br><br><br><br>";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		}
		// Close connection
		mysqli_close($conn);
		?>
</center>
</body>

</html>

