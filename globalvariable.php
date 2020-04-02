<?php

$fname="Iftekhar";
$lname="Ahmad";

function example1()
{
	global $fname;
	echo $fname; 
}
function example2()
{
	//global $lname;
	echo $GLOBALS['lname'].$GLOBALS['fname'];
}
example1();
example2();

?>
