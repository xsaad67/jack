<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte;
use App\CrawlLinks;

class ZController extends Controller
{
    
    public function links(Request $request){
    	ini_set('max_execution_time', 4890);
    	ini_set('arr')

    	$startPage = is_null($request->page) ? 1 : $request->page;

    	return $startPage;
    	return 1;

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

    	} //Ending for loop 

    } // Ending ZController@links 


}
