<?php

function changeDateTime($string,$format='F d, Y'){
	try{
		return Carbon\Carbon::parse(trim($string))->format('Y-m-d H:i:s');
	}catch(\Exception $e){
		return NULL;
	}
	
}

function removeTrailingSlash($string){
	return trim(preg_replace('/\s\s+/', ' ', $string));
}

function newGuid() { 
    $s = strtoupper(md5(uniqid(rand(),true))); 
    $guidText = 
        substr($s,0,8) . '-' . 
        substr($s,8,4) . '-' . 
        substr($s,12,4). '-' . 
        substr($s,16,4). '-' . 
        substr($s,20); 
    return $guidText;
}
?>