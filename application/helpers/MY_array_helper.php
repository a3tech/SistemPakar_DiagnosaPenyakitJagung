<?php

function sort_array($array){
if(!is_array($array)) return NULL;
for($i=0; $i<sizeof($array)-1; $i++) {
	for($j=sizeof($array)-1; $j>=$i+1; $j--){
		if($array[$j] < $array[$j-1]) {
			$temp = $array[$j];
			$array[$j] = $array[$j-1];
			$array[$j-1] = $temp;
		}
	}
}
return $array;
}

function print_array($array){
	if(!is_array($array)) return;
	foreach($array as $element) {
		echo $element." ";
	}
}

function random_element($array){
	shuffle($array);
	return array_pop($array);
}
?>