<?php
$arex=array();
$arex[5]=1;
$arex[7]="ABCX";
$arex['ss']=33;
$arex[]="A";
$arex[]=22;


/*echo $arex[7]."</br>";
echo $arex[8]."</br>";
echo $arex[9]."</br>";*/

echo"<pre>";
print_r($arex);
echo"</pre>";



$ab=array();
$ab[0][0]=14;
$ab[0][1]=15;

echo"<pre>";
print_r($ab);
echo"</pre>";


$ac=array();
$ac[0]=array(14,15,'subarray');
$ac[1]=array(5554,98985);
echo"<pre>";
print_r($ac);
echo"</pre>";

?>