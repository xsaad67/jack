<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;
use Goutte;
class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $str = "Live,Day,You,Valentine's Day,Never";
        $tag = \App\Tag::firstOrCreate(['name'=>strtolower("Day")]);
        


        $url = "https://www.brainyquote.com/authors/a_a_milne";
        $crawler = Goutte::request('GET',$url);
        $crawler->filter("div.m-brick")->each(function($node){

            //Quote 
            if($node->filter("a.b-qt")->count() > 0){

                $quoteLink = $node->filter("a.b-qt")->first();
                $quote = Quote::firstOrNew(['link'=>$quoteLink->attr("href")]);
                $quote->body = $quoteLink->text();
                $quote->author_id = 1;
                $quote->source = "brainyquote.com";

                //Quote Keywords
                if($node->filter("div.kw-box")->count() > 0){
                    $kw = $node->filter("div.kw-box")->first();
                    $str = $kw->text();

                    $quote->tags = str_replace("\n","",removeTrailingSlash($str));
                    $isSave = $quote->save();
                    dump($quote->id);

                    if($isSave){
                       $this->savingTags($quote->tags,$quote->id);
                    }
                }else{
                    $isSave = $quote->save();
                }

            }
                    
        });
    }


    public function savingTags($tags,$id){
        $tags = explode(",",$tags);
        foreach($tags as $tag){
            $tag =  \App\Tag::firstOrCreate([ 'name'=>strtolower($tag) ]);
            if($tag->id){
                $taggable = new \App\Taggable();
                $taggable->tag_id = $tag->id;
                $taggable->taggable_id = $id;
                $taggable->taggable_type = "App\Recipe";
                $taggable->save();
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function edit(Quote $quote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quote $quote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quote $quote)
    {
        //
    }
}
