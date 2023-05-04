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
		
		$password = $_REQUEST['password'];
                                       $user= $_REQUEST["user"]; 
                                   

$sql = "SELECT * FROM user WHERE Userame='$user' and Password='$password' ";
  
$sqlb= "SELECT * FROM user ";
  	
  	$res = mysqli_query($conn, $sql);
  
if($res){
  	if (mysqli_num_rows($res) > 0) {
  	 header('Location:page2.php');
  	}

               else{

             header('Location:page1.php');
echo"Wrong credentials,try Signup";
           exit();
  	}
}


		?>
</center>
</body>

</html>
