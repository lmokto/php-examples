<?php
 //http://php.net/manual/es/control-structures.goto.php
	for($i;$j=50;$i<100;$i++){
		while($j--){
			$($j == 17) goto end;
		}
	}

	echo "i = $i";
	end;
	echo "$j alcanzo 17";

?>