<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte;
use App\CrawlLinks;

class ZController extends Controller
{
    
    public function links(){

    	for($i=1;$i<=200;$i++){

    		$url = "https://www.azquotes.com/quotes/authors/a/".$i;
    		$crawler = Goutte::request('GET', $url);
    		$rangeToCrawl = $crawler->filter('div.pager > li:nth-last-child(2)')->first()->text();	
    		
    		//Adding data to crawl links
    		
    		$crawler->filter(".authors-page-a .table a")->each(function($node) use($i){
	    		$link = "https://www.azquotes.com".$node->attr('href');
	    		$name = $node->text();

	    		$links = CrawlLinks::firstOrNew(['link'=>$link]);
				$links->website = "azquotes.com";
				$links->type = "author";
				$links->pageNo = $i;
				$links->save();
	    	});

    		if($i==$rangeToCrawl){break;}
    		
    	}
    	
    	$url = "https://www.azquotes.com/quotes/authors/a/1";
    	$crawler = Goutte::request('GET', $url);

    	


    }
}
