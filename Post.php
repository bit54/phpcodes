<?php
	if($_POST['username'] && $_POST['pass'])
	{
		echo "Name\t:".$_POST['username']."<br>";
		echo "Password:".$_POST['pass']."<br>";
		exit();
	}
?>

<html>
	<body>
		<form method="POST">
			Username: <input type="text" name="username"/>
			Password: <input type="password" name="pass"/>
			<input type="submit" value="Login" />
		</form>
	</body>
</html>

