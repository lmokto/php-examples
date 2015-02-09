<?php

	// http://php.net/manual/es/control-structures.for.php

	$people = array(
		array('name' => 'kalle', 'salt'=>123123),
		array('name' => 'pierre', 'salt'=>123123)
	);

	for($i=0,$size=count($people);$i<$size;++$i){
		$people[$i]['salt']=mt_rand(000000, 999999);
	}

?>