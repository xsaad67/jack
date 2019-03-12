<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;
use Goutte;


ini_set('max_execution_time', 6890);

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
       $quotes = Quote::inRandomOrder()->paginate(20);
       return view('quotes.index',compact('quotes'));
       
    }
    

    public function savingTags($tags,$id){
        $tags = explode(",",$tags);
        foreach($tags as $tag){
            $tag =  \App\Tag::firstOrCreate([ 'name'=>strtolower($tag) ]);
            if($tag->id){
                $taggable = new \App\Taggable();
                $taggable->tag_id = $tag->id;
                $taggable->taggable_id = $id;
                $taggable->taggable_type = "App\Quote";
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
