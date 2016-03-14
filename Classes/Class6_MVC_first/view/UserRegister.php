<!DOCTYPE html>
<html>

<head>
	<title>Register</title>
</head>

<body>

	<form action="control/ControlManager.php" method="post">

		<input type="text" name="name" placeholder="type your name" required>

		<input type="text" name="lastname" placeholder="type your lastname" required>

		<input type="text" name="email" placeholder="type your email" required>

		<input type="password" name="pass" placeholder="type your password" required>

		<input type="date" name="date" required>

		<input type="submit" value="Open account">

	</form>

</body>

</html>