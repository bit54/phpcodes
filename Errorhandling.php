<?php

//try catch and finally

	function inverse($x)
	{
		if(!$x)
		{
			throw new Exception('Devided by zero');
		}
		return 1/$x;
	}
	
	function checkNum($n){
		if($n>1)
		{
			throw new Exception("Value must be 1 or below");
		}
		return true;
	}
	try
	{
		echo inverse(5)."<br>";
		echo inverse(0)."<br>";
	}catch(Exception $e){
		echo "Caught Exception: ".$e->getMessage()."<br>";
	}
	finally{
	echo "<br>First Finally<br>";}
	echo "Hello World<br>";
	
	try{
		checkNum(2);
		echo"If u see this number, the number is 1 or below";
	} catch(Exception $e){
	echo "Message: ".$e->getMessage();}
	finally{
	echo "<br>Second Finally";}
	
?>