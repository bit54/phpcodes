<?php 
	//INDEX ARRAYS
	Echo"INDEX ARRAYS<br/>";
	$arr = array('a','b','c','d','e','f');
	print_r($arr);
	echo"<br/>";
	foreach($arr as $x)
	{
		echo " ".$x;
	}
	
	
	//ASSOSIATIVE ARRAYS
	echo"<br><br/>ASSOSIATIVE ARRAYS";
	$countryCode= array("PK"=>"92","UAE"=>"97","IN"=>"91");
	foreach($countryCode as $list=>$list_val)
	{
		echo"<br> Country code".$list."\t".$list_val;
	}
	
	echo"<br>";
	$test=array('x' => "Iftekhar");
	echo "Hello {$test['x']}!";
	
	echo"<br><br/>MULTIDIMENTIONAL ARRAYS<br>";
	
	$mob=array
	(
		array("Iphone",20,12),
		array("Samsung",30,16)
	);
	
	echo $mob[0][0]."=> In stock: ".$mob[0][1].", Sold: ".$mob[0][2];
	echo"<br>";
	echo $mob[1][0]."=> In stock: ".$mob[1][1].", Sold: ".$mob[1][2];
?>