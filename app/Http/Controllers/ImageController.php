<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use GDText\Box;
use GDText\Color;
use Intervention\Image\Filters\DemoFilter;
use App\Tags;
use App\Quote;

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

		$quote = Quote::where(\DB::raw(' length(body)'),'<=',200)->count();
		return $quote;

		// $str = "I would sit on the street corners in my hometown of Indianola, Mississippi, and I would play. And, generally, I would start playing gospel songs. People would come by on the street - ";
		// $im = imagecreatefromjpeg(public_path("assets/img/article-1.jpg"));
		// $box = new Box($im);
		// $fontLocation=storage_path('app\public\fonts\kaushan.otf');
		// $box->setFontFace($fontLocation); 
		// $box->setFontColor(new Color(255, 255, 255));
		// $box->setTextShadow(new Color(0, 0, 0, 50), 1,1);
		// $box->setFontSize(40);
		// $box->setBox(200, 200, 750, 400);
		// $box->setBackgroundColor(new Color(21, 20, 20, 60));
		// $box->setTextAlign('center', 'center');
		// $box->draw($str."\n ~ Nothing \n Mynameofcompany.com");
		// header("Content-type: image/png");
		// imagepng($im);
	}





	public function downloadImage($imageUrl,$imagePath){

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

		$s = imagepng($img, $imagePath);
		return $s;
		

	}

	public function downloadImageWithoutGrey($imageUrl,$imagePath){
		$im = Image::make($imageUrl);
		$s = $im->save($imagePath);
		return $s;
	}

	public function template(){


		


		// $apiUrl = "https://pixabay.com/api/?key=11868873-c46ec2233b9e391b1b7e9e0c5&q=nature&colors=grayscale";
		
		// session()->put("images",json_decode(file_get_contents($apiUrl)) );

		foreach(session()->get("images")->hits as $image){
			
			$maxId = \App\ImageTemplates::max('id') +1;
			$fileName = newGuid()."_".$maxId.".png";
			$imagePath=public_path("images/templates/".$fileName);

			if($this->downloadImageWithoutGrey($image->largeImageURL,$imagePath)){
				$imageTag = new \App\ImageTemplates();
				$imageTag->imageName = $fileName;
				$imageTag->keyword = "nature";
				$imageTag->isGray =1;
				$imageTag->save();
			}

		}



	}


 
}
