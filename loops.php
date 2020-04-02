<?php

		// for loop
		$week=array("mon","tue","wed","thurs","friday","sat","sun");
		for($i=0;$i<10;$i++) 
		{
			echo "square of ".$i." = ".($i *$i)."<br>";
		}
		
		foreach($week as $v)
		{
			echo $v."<br/>";
		}

?>