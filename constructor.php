<?php
	//Cunstructor method starts with 2 underscores (__cunstruct)
	
	class test
	{
		var $name;
		
		function __construct($person)
		{
			$this->name = $person;
		}
		function showName()
		{
			echo "My name is ".$this->name;
			
		}
	}
	
	$obj = new test("Iftekhar");
	$obj->showName();
?>