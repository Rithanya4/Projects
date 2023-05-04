Book_name:<input type="text" class="form" value="" required name="bkname">
Author_name:<input type="text" class="form" value="" required name="auname">
<input type="submit" class="form" value="Add">


<?php
echo"working";
if(isset($_COOKIE["username"])) 
{ 
echo $_COOKIE["username"]; 
$bkname=$_POST['bkname'];
$auname=$_POST['auname'];
		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "registration");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$user=$_COOKIE["username"];
		// Performing insert query execution
		// here our table name is college
		$sql = "insert into addbook values('$bkname','$auname','$_COOKIE["username"]')";
	if(mysqli_query($conn, $sql)){
			echo "<h3>Book added to wishlist successfully.";

			echo ("\n$book_name\n $author_name\n ");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
}
		?>
