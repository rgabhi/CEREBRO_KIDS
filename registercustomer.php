
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
</head>
<body >

	<div class="outer">
		<fieldset>	
			<h2 class="headingregister">Register</h2>
			<div class="inner">
				<form class="formregister" action="index.php" method="post" >
					First name:<br> <input type="text" name="firstname" ><br><br>
					Last name: <br><input type="text" name="lastname" ><br><br>
					Email: <br><input type="email" name="email" ><br><br>

					Password: <br><input type="Password" name="Password" min="8" ><br>
					Re-Type Password: <br><input type="Password" name="RePassword" ><br><br>
					<button type="submit" value="Register" >Register</button>
					<button type="reset" >Reset</button>
				</form>
			</div>
		</fieldset>	
	</div>

</body>
</html>