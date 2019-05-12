<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte;
use App\CrawlLinks;

class ZController extends Controller
{
    
  public function links(Request $request){
    dd("completed");
    ini_set('max_execution_time', 16900);
    $startPage = is_null($request->page) ? 1 : $request->page;
    $alphas = range('u', 'z');
    foreach($alphas as $alpha){

      	for($i=1;$i<=200;$i++){

      		$url = "https://www.azquotes.com/quotes/authors/".$alpha."/".$i;
      		$crawler = Goutte::request('GET', $url);

      		$rangeToCrawl = ($crawler->filter('div.pager > li:nth-last-child(2)')->count() > 0) ? 
                      $crawler->filter('div.pager > li:nth-last-child(2)')->first()->text() :
                      1;

      		//Adding data to crawl links
      		$crawler->filter(".authors-page-a .table tbody > tr")->each(function($node) use($i){

            $link = "https://www.azquotes.com".$node->filter("td:first-child > a")->attr("href");
            // $name = $node->filter("td:first-child > a")->text();
            $profession = trim($node->filter("td:nth-child(2)")->text());
            $dob = trim($node->filter("td:last-child")->text());
            $dobArray = formatDate($dob);


  	    		$links = CrawlLinks::firstOrNew(['link'=>$link]);
    				$links->website = "azquotes.com";
    				$links->type = "author";
    				$links->pageNo = $i;
            $links->occupation = $profession;
            $links->unformat = $dob;
            $links->born = $dobArray['born'];
            $links->death = $dobArray['death'];
            $links->save();


  	    	});
      		if($i==$rangeToCrawl){break;}
      	}  //Ending for loop 
    }//Ending Foreach 

  } // Ending ZController@links 


  public function authors(Request $request){
    
  }

    
    
}
