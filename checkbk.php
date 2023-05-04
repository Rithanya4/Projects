
<!DOCTYPE html>
<html>
<head>
	<title>Insert Page page</title>
<link rel="stylesheet" href="minipro.css">
<link rel="stylesheet" href="css.css">
</head>

<body style="background-color: #33ffcc" >
<div class="but">
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
		
		$bname=$_REQUEST["bookname"];
                                        
                                   
$sql = "SELECT * FROM wishlist WHERE Bookname='$bname'";
  
  	$res = mysqli_query($conn, $sql);
  
if($res){
  	if (mysqli_num_rows($res) > 0) {
  	echo"";
                
  	}

               else{
echo"Book doesn't exists in this library";
             
           exit();
  	}
}

		?>


<?php

if(isset($_COOKIE["username"])) 

$user= $_REQUEST["username"]; 

$errors = array();	

		$user="";
echo"$user";
	$conn = mysqli_connect("localhost", "root", "", "registration");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
                                       
 $bookname= $_REQUEST["bookname"];

		$sql = "INSERT INTO addbook  VALUES ('$bookname','$user')";
		
		if(mysqli_query($conn, $sql)){
			echo "Book added to your wishlist successfully";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>

<br><br>
<a href="wishlist.php" class="des"> Wishlist</a></center>
</div>
</body>

</html>
