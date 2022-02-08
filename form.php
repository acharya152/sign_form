<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SIGN UP HERE!!!</title>
	<link rel="stylesheet" type="text/css" href="forms.css">
</head>
<body>

		<div class="firstdiv"> 
			<form class="formdiv" action="database.php" method="post">
				<h4>CREATE AN ACCOUNT </h4>
				<label>Full Name</label>
				<input required type="text" name="fname" placeholder="Enter your Full Name">
				<label>Email</label>
				<input required type="Email" name="email" placeholder="Enter your Email Address">
				<label>Password</label>
				<input required type="Password" name="password" placeholder="Enter your Password">
				<label>Confirm-Password</label>
				<input required type="Password" name="cpassword" placeholder="Re-enter Password">
				<input required  type="Submit" name="signup" value="SIGN UP">
			</form>

		</div>

</body>
</html>