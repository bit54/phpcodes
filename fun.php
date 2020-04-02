<?php

function myMsg()
{
	echo "Hey there! I'm a function";
}

function Sum($num1,$num2)
{
	echo "Sum of two number ".($num1+$num2);
	
}

//Sum(12,22);

function myFun($num1,$num2)
{
	return $num1*$num2;
}
echo myFun(12,22);
?>