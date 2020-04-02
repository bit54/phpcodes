<?php 
	include 'connection.php';
	
	$query = "SELECT * FROM mydata";
	$result=mysqli_query($db,$query);
	while($row=mysqli_fetch_array($result))
	{
		echo"<br/>ID: ".$row["id"];
		echo"<br/>Name: ".$row["name"];
		echo"<br/>Password: ".$row["password"];
	}
?>