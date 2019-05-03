<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte;
use App\CrawlLinks;

class ZController extends Controller
{
    
    public function links(Request $request){

    	ini_set('max_execution_time', 10900);
    	

    	$startPage = is_null($request->page) ? 1 : $request->page;
      $alphas = range('k', 'z');
      foreach($alphas as $alpha){

      	for($i=66;$i<=200;$i++){

      		$url = "https://www.azquotes.com/quotes/authors/".$alpha."/".$i;
          // $url = "https://www.azquotes.com/quotes/authors/j/".$i;
      		$crawler = Goutte::request('GET', $url);

      		$rangeToCrawl = $crawler->filter('div.pager > li:nth-last-child(2)')->first()->text();
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
       $url= "https://www.azquotes.com/quotes/authors/a";
       $crawler = Goutte::request('GET', $url);
       $crawler->filter(".table tbody > tr > td:nth-child(2)")->each(function($node){
           if($node->filter('a')->count() > 0){
              dump($node->filter('a')->attr("href"));
              dump($node->filter('a')->text());
           }else{
            dump(trim($node->text()));
           }
       });
    }

    
    
}
