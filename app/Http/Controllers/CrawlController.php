<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte;
use App\CrawlLinks;
use App\Author;
use App\Post;

ini_set('max_execution_time', 6890);

class CrawlController extends Controller
{
   public function index(){
   		

         $crawlLinks = CrawlLinks::where("link",'https://www.brainyquote.com/authors/william_shakespeare')->get();

         return $crawlLinks;


      foreach($crawlLinks as $crawlLink){

        $crawlLinks = CrawlLinks::where("isCrawled",0)->take(1000)->get();
         foreach($crawlLinks as $crawlLink){

            $url = $crawlLink->link;
            $crawler = Goutte::request('GET', $url);
            $author = new Author();
            $authorSave = FALSE;


            //Adding infromation to Author table

      		$crawler->filter('div.bio-under')->each(function($node) use($author,$crawlLink,&$authorSave){

               $heading = $node->filter('h1')->first()->text();
               $author->name = str_replace("quote", "",strtolower(removeTrailingSlash($heading)));

      			$descriptionArray = $node->filter('div[style="white-space: nowrap"]')->first()->text();

      			if($descriptionArray !== "\n"){
                  $descriptionArray = explode("-",$descriptionArray);

                  if(isset($descriptionArray['1'])){
                        $professionArray = explode("\n",$descriptionArray['1']);
                        $author->profession = isset($professionArray[1]) ? $professionArray[1] : NULL;
                        $author->born = isset($professionArray[3]) ? str_replace("born: ", "",strtolower(removeTrailingSlash($professionArray[3] ))) : NULL;
                  }
                  

                  $author->nationality = isset($descriptionArray[0]) ? removeTrailingSlash($descriptionArray[0]) : NULL;

                  $author->death = isset($descriptionArray[2]) ? removeTrailingSlash($descriptionArray[2]) : NULL;

                  $author->formatBorn = changeDateTime($author->born);
                  $author->formatDeath = changeDateTime($author->death);
                  $author->link = $crawlLink->link;
                  $author->source = $crawlLink->website;
      			}
      			
               $authorSave = $author->save();
      		});
      		$authorId = $author->id;

            //Adding to quotes table 

            if($authorSave){

	            $crawler->filter("div.m-brick")->each(function($node) use ($authorId){

	            	//Quote 
	            	if($node->filter("a.b-qt")->count() > 0){

		            	$quoteLink = $node->filter("a.b-qt")->first();
			  			    $quote = Post::firstOrNew(['link'=>$quoteLink->attr("href")]);
		            	$quote->body = $quoteLink->text();
		            	$quote->author_id = $authorId;
		            	$quote->source = "brainyquote.com";

		            	//Quote Keywords
		            	if($node->filter("div.kw-box")->count() > 0){
			            	$kw = $node->filter("div.kw-box")->first();
			            	$str = $kw->text();
			            	$quote->tags = str_replace("\n","",removeTrailingSlash($str));
		            	}
		            	$quote->save();
	            	}
	            	
	            });

            }
            
            

            $crawlLink->isCrawled = 1;
            $crawlLink->save();
         
         }
   		
      }
   }
}
