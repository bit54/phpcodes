<?php
	if($_REQUEST['username'] && $_REQUEST['pass'])
	{
		echo "Name\t:".$_REQUEST['username']."<br>";
		echo "Password:".$_REQUEST['pass']."<br>";
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

