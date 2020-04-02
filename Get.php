<?php
	if($_GET['username'] && $_GET['pass'])
	{
		echo "Name\t:".$_GET['username']."<br>";
		echo "Password:".$_GET['pass']."<br>";
		exit();
	}
?>

<html>
	<body>
		<form method="GET">
			Username: <input type="text" name="username"/>
			Password: <input type="password" name="pass"/>
			<input type="submit" value="Login" />
		</form>
	</body>
</html>

