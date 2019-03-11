<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CrawlLinks;
use Goutte;
use Image;
use Carbon\Carbon;
use App\Tag;

ini_set('max_execution_time', 4890);

class CrawlLinksController extends Controller
{

    public function author(){

    	$alphas = range('q', 'z');

    	$rangeToCrawl=0;
	    foreach($alphas as $alpha){

		    $crawler = Goutte::request('GET', 'https://www.brainyquote.com/authors/'.$alpha);

		    if ($crawler->filter('ul.pagination > li:nth-last-child(2) > a')->count() > 0 ) {
		    	$rangeToCrawl = $crawler->filter('ul.pagination > li:nth-last-child(2) > a')->first()->text();
			}

		    $crawler->filter("td > a")->each(function($node){
		    	$link = $node->attr("href");

		  		$links = CrawlLinks::firstOrNew(['link'=>"https://www.brainyquote.com".$link]);
				$links->website = "brainyquote.com";
				$links->type = "author";
				$links->pageNo = 1;
				$links->save();
		    });

		    if($rangeToCrawl >= 2 ){

			    for($i=2; $i<=$rangeToCrawl; $i++){

				    $crawler = Goutte::request('GET', 'https://www.brainyquote.com/authors/'.$alpha.$i);

				    $crawler->filter("td > a")->each(function($node) use ($i){
				    	$link = $node->attr("href");
				  		$links = CrawlLinks::firstOrNew(['link'=>"https://www.brainyquote.com".$link]);
						$links->website = "brainyquote.com";
						$links->type = "author";
						$links->pageNo = $i;
						$links->save();
				    });

				}

		    }


    	}

    }


    public function topics(){
    	$url = "https://www.brainyquote.com/topics";
    	$crawler = Goutte::request('GET', $url);
    	$crawler->filter('.topicIndexChicklet')->each(function($node){
    		$tag = new Tag();
    		$tag->name = strtolower($node->filter('span.topicContentName')->first()->text());
    		$tag->link = $node->attr('href');
    		$tag->source = "brainyquote.com";
    		$tag->save();
    	});
    	
    }

    public function quotes(){

    }
   
}
