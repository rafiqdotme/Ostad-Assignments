<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
</head>
<body>
	<h2>User Registration Form</h2>
	<form method="POST" action="process.php" enctype="multipart/form-data">
		<label>Name:</label><br>
		<input type="text" name="name"><br>
		<label>Email:</label><br>
		<input type="text" name="email"><br>
		<label>Password:</label><br>
		<input type="password" name="password"><br>
		<label>Profile Picture:</label><br>
		<input type="file" name="profile_pic"><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>