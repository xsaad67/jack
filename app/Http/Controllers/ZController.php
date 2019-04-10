<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte;
use App\CrawlLinks;

class ZController extends Controller
{
    
    public function links(Request $request){

    	ini_set('max_execution_time', 4890);
    	

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


    public function authors(Request $request){

        $str = "Occupation: Poet";
        // dd(str_contains($str,"Occupation"));

        $occupation = null;
        $born = null;
        $death = null;
        // dump($born);

        // switch($str){
        //     case str_contains($str,"Occupation"):
        //         $occupation = trim(str_replace("Occupation:","",$str));
        //         break;
        //     case str_contains($str,"Born"):
        //         $born = trim(str_replace("Born:","",$str));
        //         break;
        //     case str_contains($str,"Died"):
        //         $death = trim(str_replace("Died:","",$str));
        //         break;
        // }

        

        // dd($str);
        

       $url = "https://www.azquotes.com/author/37891-Muhammad";
       $crawler = Goutte::request('GET',$url);
       $image = $crawler->filter("img.at_include")->count() > 0 ? "https://www.azquotes.com/".$crawler->filter("img.at_include")->first()->attr('src') : null;
       dump($image);

       $crawler->filter("ul.info")->each(function($node) use (&$occupation,&$born,&$death){
            
       });

        dump($occupation);
        dump($born);
        dump($death);
    }

}
