<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use GDText\Box;
use GDText\Color;

ini_set('max_execution_time',4000);

class ImageController extends Controller
{


	public function addAlphaColor(){

		$toMask = storage_path('app\public\tomask.jpg');

		$img = imagecreatefromjpeg($toMask);
		$w = imagesx($img);
		$h = imagesy($img);
		imagesavealpha($img, true);

		$img2 = imagecreatetruecolor($w, $h);
		imagefill($img2, 0, 0, imagecolorallocatealpha($img, 86, 69, 1, 30));

		imagecopy($img, $img2, 0, 0, 0, 0, $w, $h);

		imagepng($img, public_path("images/new.png"));
		imagedestroy($img);
		imagedestroy($img2);
	}

     public function image(){
    
  	

 //  	$im = imagecreatetruecolor(500, 500);	
	// $backgroundColor = imagecolorallocate($im, 0, 18, 64);
	// imagefill($im, 0, 0, $backgroundColor);

	// $box = new Box($im);
	// $fontLocation=storage_path('app\public\fonts\kaushan.otf');
	// $box->setFontFace($fontLocation); // http://www.dafont.com/franchise.font
	// $box->setFontColor(new Color(255, 75, 140));
	// $box->setTextShadow(new Color(0, 0, 0, 50), 2, 2);
	// $box->setFontSize(30);
	// $box->setBox(30, 40, 460, 460);
	// $box->setTextAlign('left', 'top');
	// $box->draw("A clever conjurer is welcome anywhere, and those of us whose powers of entertainment are limited to the setting of booby-traps or the arranging of apple-pie beds must view with envy the much greater tribute of laughter and applause which is the lot of the prestidigitator with some natural gift for legerdemain.\n \n ~Nothing");


	// header("Content-type: image/png");
	// imagepng($im);
 //    }


  //   public function multiline(){

  //   	$textToBeShown ="A clever conjurer is welcome anywhere, and those of us whose powers of entertainment are limited to the setting of booby-traps or the arranging of apple-pie beds must view with envy the much greater tribute of laughter and applause which is the lot of the prestidigitator with some natural gift for legerdemain.";
		// $img2 = Image::make(public_path('images/temp1.jpg'))->brightness(20);
		// // inserts character where string is to be split into new line (after 15 characters, keeping words intact)
		// $string = wordwrap($textToBeShown,35,"|");
		// //create array of lines
		// $strings = explode("|",$string);
		// $i=3; //top position of string
		// //for each line added
		// $fontLocation=storage_path('app\public\fonts\kaushan.otf');
		// foreach($strings as $string){
		// 	$img2->text($string, 300, $i, function($font) use($fontLocation) {
		// 	$font->file($fontLocation);
		// 	$font->size(12);
		// 	$font->color('#000');
		// 	$font->align('center');
		// 	$font->valign('center');
		// 	});
		// 	$i=$i+42; //shift top postition down 42
		// }


		// return $img2->response();

    }
}
