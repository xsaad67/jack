<?php

function changeDateTime($string,$format='F d, Y'){
	$ymd = DateTime::createFromFormat($format, $string)->format('Y-m-d H:i:s');
	return $ymd;
}

?>