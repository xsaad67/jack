<?php 
	
function randomFont(){

	$fontsArray = [];
    $files = \File::files(storage_path('app/public/fonts'));
    foreach($files as $file){
        $fontsArray[]=$file->getFileName();
    }
    $fontName = $fontsArray[array_rand($fontsArray)];
    return ["fontLocation"=>storage_path("app/public/fonts/palitoon.otf"),
    		"fontName"=>$fontName
    		];
}

function createQuote($templateName,$str,$author){
		
	$font = randomFont();
	$im = imagecreatefrompng($templateName);
	$width  = imagesx($im);
	$height = imagesy($im);

	$fontSize = imageAspect($width,$height);
	
	$box = new GDText\Box($im);
 	$box->setFontFace($font['fontLocation']); 
    $box->setFontColor(new GDText\Color(255, 255, 255));
    $box->setTextShadow(new GDText\Color(0, 0, 0, 50), 1,1);
    $box->setFontSize($fontSize);
    $box->setBox(240, 200, 700, 400);
    $box->setBackgroundColor(new GDText\Color(21, 20, 20, 30));
    $box->setTextAlign('center', 'center');
    $box->draw($str."\n ~ ".$author."    \n ".env("APP_NAME")."  ");
    // header("Content-type: image/png");
    // imagepng($im);
    $fileToSave =$font['fontName']."_".newGuid().".png";
    imagepng($im,public_path('images/test/'.$fileToSave));

    return [
            'font'=>$font['fontName'],
            'fileName'=>$fileToSave,
            'imageSize' => $width."x".$height,
            'fontSize' => $fontSize,
            ];
}


function imageAspect($width,$height){
	$diff = abs($height-$width);
    
	if($diff > 250){
		return 70;
	}else{
		return 50;
	}
}

?>