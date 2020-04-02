<?php 
	class Emp
	{
		function setMethod($name, $age)
		{
			$this->name=$name;
			$this->age=$age;
		}
		function getMethod()
		{
			echo "My name is: ".$this->name;
			echo"<br>";
			echo "Age: ".$this->age;
			echo "<hr>";
		}
	}
	$obj= new Emp;
	$obj->setMethod("Iftekhar","19");
	$obj->getMethod();
	
	$obj->getMethod();
	?>