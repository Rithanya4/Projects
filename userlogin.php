<HTML>
<head>
</head>
<script>  
function verifyPassword() {  
  var pw = document.getElementById("pswd").value;  
  
 //minimum password length validation  
  if(pw.length < 8) {  
     document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
     return false;  
  }  
  
//maximum length of password validation  
  if(pw.length > 15) {  
     document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
     return false;  
  } else {  
     alert("Password is correct");  
  }  
}  
</script>

<body style="background-color:#66ffcc ">
<center>
<h3 class="welcome">Login page!</h3>
<link rel="stylesheet" href="minipro.css">
<form action="checkuser.php" onsubmit="verifyPassword()" class="welcome" method="post" style="border: 2px dotted blue; text-align:center; width: 400px;">
	<p>
		Username: <input name="user" type="text" required value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" class="input-field">
	</p>
                                
		 <p>Password: <input name="password"  id="pswd"  type="password" required value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" class="input-field">
	</p>
                                   
		<p><input type="checkbox" name="remember" /> Remember me
	</p>
		<p><input type="submit" value="Login"></span></p>
</form>
</center>
</body>
</html>
