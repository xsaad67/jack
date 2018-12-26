<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte;
use App\CrawlLinks;
use App\Author;

class CrawlController extends Controller
{
   public function index(){
   		
         $crawlLinks = CrawlLinks::where("isCrawled",0)->take(10)->get();

         // $dt = \Carbon\Carbon::parse('December 9, 1936')->format('Y-m-d H:i:s');

         // dd($dt);

         foreach($crawlLinks as $crawlLink){

            $url = $crawlLink->link;
            $crawler = Goutte::request('GET', $url);
            $author = new Author();

            //Adding infromation to Author table
      		$crawler->filter('div.bio-under')->each(function($node) use($author,$crawlLink){

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
      			
               $author->save();
      		});

            $crawlLink->isCrawled = 1;
            $crawlLink->save();
         
         }
   		
   }
}
