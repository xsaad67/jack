<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use GDText\Box;
use GDText\Color;
use Intervention\Image\Filters\DemoFilter;

ini_set('max_execution_time',4000);

class ImageController extends Controller
{


	public function addAlphaColor(){

		$toMask = storage_path('app\public\tomask1.jpg');

		$img = imagecreatefromjpeg($toMask);
		$w = imagesx($img);
		$h = imagesy($img);
		imagesavealpha($img, true);

		$img2 = imagecreatetruecolor($w, $h);
		imagefill($img2, 0, 0, imagecolorallocatealpha($img, 86, 69, 1, 40));

		imagecopy($img, $img2, 0, 0, 0, 0, $w, $h);

		imagepng($img, public_path("images/new.png"));
		imagedestroy($img);
		imagedestroy($img2);

		// $img = Image::make($toMask);
		// $width = $img->width();
		// $height = $img->height();
	
		// return $img->blur(40)->save(public_path("images/new1.png"));
		// return $img->getCore()->response();
		// return ->greyscale()->response();
	}

     public function image(){
    
  	

 //  	$im = imagecreatetruecolor(500, 500);	
	// $backgroundColor = imagecolorallocate($im, 0, 18, 64);
	// imagefill($im, 0, 0, $backgroundColor);
	// 
	// 
	

	$str = "Good, better, best. Never let it rest. 'Til your good is better and your better is best. hello world";
	
	$im = imagecreatefrompng (public_path("images/new.png"));

	$box = new Box($im);
	$fontLocation=storage_path('app\public\fonts\kaushan.otf');
	$box->setFontFace($fontLocation); // http://www.dafont.com/franchise.font
	$box->setFontColor(new Color(255, 255, 255));
	$box->setTextShadow(new Color(0, 0, 0, 50), 1,1);
	$box->setFontSize(40);
	$box->setBox(40, 25, 550, 400);
	$box->setTextAlign('center', 'top');
	$box->draw($str."\n \n ~Nothing \n Mynameofcompany.com");

	

	header("Content-type: image/png");
	imagepng($im);
 }

 
}
