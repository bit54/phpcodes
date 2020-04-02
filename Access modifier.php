<?php
 // public > protected > private
 
 class accessModifier{
	 public $var1="Im Public type variable<br>";
	 protected $var2="Im Protected type variable<br>";
	 private $var3="Im Private type variable<br>";
 }
 
 class testAccess extends accessModifier{
	 function showMeth()
	 {
		 echo $this->var1;
		 echo"<br>";
		 
		 echo $this->var2;
		 echo"<br>";
		 
		 echo $this->var3;
		 echo"<br>";
	 }
 }
 
 $obj = new testAccess;
 $obj->showMeth();
?>