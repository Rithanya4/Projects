
<body style="background-color:#66ffcc ">
<center>
<h3 class="welcome">Sign Up!</h3>
<link rel="stylesheet" href="minipro.css">
<form action="newinsert.php" class="welcome" method="post" style="border: 2px dotted blue; text-align:center; width: 400px;">
	<p>
		Username: <input name="user" name="username"  type="text" required value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" class="input-field">
	</p>
                                    <p>Email id: <input name="email"  name="email" type="email" required value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>" class="input-field">
	</p
		 <p>Password: <input name="password" name="password" type="password" required value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" class="input-field">
	</p>
                                   
		<p><input type="checkbox" name="remember" /> Remember me
	</p>
		<p><input type="submit" value="Login"></span></p>
</form>
</center>
