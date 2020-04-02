<html>
<head></head>
<body>

<?php 
	#Lessson1
	//This is comment
	/*this is another line comment
	this is last line cooment
	echo "use echo with multi line comment";
	
	print "\n <h1><center>use of print</center></h1>";
	*/
	
	
	#Lessson2 : variable
	/*
	echo"<h2>Example of variable in php</h2>";
	$x=5;
	$y=6;
	$z=$x+$y;
	echo"<b>Answer is: $z</b>";
	$str="<br /> This is an expale of string ";
	
	echo $str;
	*/
	
	#Lessson3 : Operators
	$str1="Hello";
	$str2="World";
	
	//conactinaton=> .
	echo $str1." ".$str2;
	
	// arithmatic
	$x=66;
	$y=10;
	$z=$x%$y;
	
	echo "<br/>ans: $z";
	
	$x++ ;
	echo "<br/>$x";
	
	//comparision operator
	
	$a="hello";
	$b="Hello"; // == checks value not datatype, so use ===
	echo"<br/>";
	if($a==$b)
	{
		echo "a and b are equal";
	}
	else
	{
		echo "a and b are not equal";
	}
?>

</body>
</html>