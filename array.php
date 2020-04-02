<?php

/* in c/c++
int rollno[10];
rollno[0]=99;
*/

//php array

$arex = array();
$arex[0]=2;
$arex['abc']="xyz";	

echo $arex[0]."<br/>";
echo $arex['abc']."<br/>";


$na=array(2,"abc");
echo $na[0]."<br/>";
echo $na[1]."<br/>";

$nb=array(10=>2,'xj'=>"abbc");
echo $nb[10]."<br/>";
echo $nb['xj']."<br/>";

?>