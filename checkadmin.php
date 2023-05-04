<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
<link rel="stylesheet" href="minipro.css">

<link rel="stylesheet" href="css.css">
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
                                   

$sql = "SELECT * FROM admin WHERE Username='$user'";
  
$sqlb= "SELECT * FROM addbook ";
  	
  	$res = mysqli_query($conn, $sql);
  
if($res){
  	if (mysqli_num_rows($res) > 0) {
  	 echo" <a href='allmem.php'  class='addbk' style='text-decoration: none;color:black'>View members</a>";
                   
  	}

               else{
            echo" Not an admin";
           exit();
  	}
}

$resb = mysqli_query($conn, $sqlb);
  
if($resb){
  	if (mysqli_num_rows($resb) > 0) {
  	 echo" <a href='viewbooks.php'  class='addbk' style='text-decoration: none;color:black'>View books</a>";
                   
  	}

               else{
            echo" Not an admin";
           exit();
  	}
}


		?>

</center>
</body>

</html>
