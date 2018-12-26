<?php

function changeDateTime($string,$format='F d, Y'){
	// $string = ucwords($string);
	// dd($string);
	// $ymd = DateTime::createFromFormat($format, $string)->format('Y-m-d H:i:s');
	// return $ymd;
	try{
		return Carbon\Carbon::parse(trim($string))->format('Y-m-d H:i:s');
	}catch(\Exception $e){
		return NULL;
	}
	
}

function removeTrailingSlash($string){
	return trim(preg_replace('/\s\s+/', ' ', $string));
}
?>