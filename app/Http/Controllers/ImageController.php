<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use GDText\Box;
use GDText\Color;
use Intervention\Image\Filters\DemoFilter;
use App\Tags;

ini_set('max_execution_time',4000);

class ImageController extends Controller
{

	public function addAlphaColor(){

		$toMask = public_path('assets\img\desktop-app8.jpg');


		$img = imagecreatefromjpeg($toMask);
		$w = imagesx($img);
		$h = imagesy($img);
		imagesavealpha($img, true);

		$img2 = imagecreatetruecolor($w, $h);
		imagefill($img2, 0, 0, imagecolorallocatealpha($img, 21, 20, 20, 60));

		imagecopy($img, $img2, 0, 0, 0, 0, $w, $h);

		imagepng($img, public_path("images/new.png"));

		header("Content-type: image/png");
		imagepng($img);
	}

	public function image(){

		$str = "I would sit on the street corners in my hometown of Indianola, Mississippi, and I would play. And, generally, I would start playing gospel songs. People would come by on the street - ";
		$im = imagecreatefrompng (public_path("images/new.png"));
		$box = new Box($im);
		$fontLocation=storage_path('app\public\fonts\kaushan.otf');
		$box->setFontFace($fontLocation); 
		$box->setFontColor(new Color(255, 255, 255));
		$box->setTextShadow(new Color(0, 0, 0, 50), 1,1);
		$box->setFontSize(40);
		$box->setBox(200, 200, 750, 400);
		$box->setBackgroundColor(new Color(21, 20, 20, 60));
		$box->setTextAlign('center', 'center');
		$box->draw($str."\n ~ Nothing \n Mynameofcompany.com");
		header("Content-type: image/png");
		imagepng($im);
	}





	public function downloadImage($imageUrl){

	 	$ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, $imageUrl); 
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	    curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1); 
	    $data = curl_exec($ch);
	    curl_close($ch);
	    // dd($data);
	    $img = imagecreatefromstring($data);
		$w = imagesx($img);
		$h = imagesy($img);
		imagesavealpha($img, true);

		$img2 = imagecreatetruecolor($w, $h);
		imagefill($img2, 0, 0, imagecolorallocatealpha($img, 21, 20, 20, 60));

		imagecopy($img, $img2, 0, 0, 0, 0, $w, $h);

		imagepng($img, public_path("images/new.png"));
		header("Content-type: image/png");
		imagepng($img);

	}

	public function template(){

		$apiUrl = "https://pixabay.com/api/?key=11868873-c46ec2233b9e391b1b7e9e0c5&q=inspiration";
		$this->downloadImage("https://pixabay.com/get/ee36b70720f11c22d2524518b74d479ee57fead21aac104490f2c57ea3efb4ba_1280.jpg");


	}


 
}
