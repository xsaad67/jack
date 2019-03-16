<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Image;

class ImageTemplatesController extends Controller
{

    public function create(){
    	$tags = Tag::templateTags()->take(1)->get();
    	$unsplashApi = "https://api.unsplash.com/search/photos?client_id=".env('UNSPLASH_KEY')."&per_page=30&query=";
    	
    
    	foreach($tags as $tag){
    		$images = json_decode(file_get_contents($unsplashApi.$tag->name));
    		
    		foreach($images->results as $image){
    			$url = $image->urls->regular;

    			$maxId = \App\ImageTemplates::max('id') +1;
				$fileName = newGuid()."_".$maxId.".png";
				$imagePath=storage_path("app/public/templates/".$fileName);
				
				Image::make($url)->save($imagePath);
    			
    			$imageTag = new \App\ImageTemplates();
				$imageTag->imageName = $fileName;
				$imageTag->keyword = $tag->name;
				$imageTag->isGray =0;
				$imageTag->save();
    		}
    	}

    	

    }


}
